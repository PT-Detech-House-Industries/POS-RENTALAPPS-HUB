<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Talent;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
// middleware
use App\Http\Middleware\CheckRole;
use Auth;

class TalentController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(CheckRole::class . ':admin')->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            if (Auth::user()->hasRole('owner')) {
                // membuat owner yang bisa memiliki akses untuk membuat user akun.
                $data = Talent::all();
                // $data = User::where('role', '!=', 'owner')->get();

                foreach ($data as $d) {
                    $birthDate = Carbon::parse($d->birthday);
                    $currentDate = Carbon::now();
                    $d->age = $currentDate->diffInYears($birthDate);
                }

                // return dd($data);

                return view('production.talent.index',
                compact(
                    'data',
                ));
                // return 'owner';
                
            } elseif (Auth::user()->hasRole('admin')) {
                
                return 'admin';

            } elseif (Auth::user()->hasRole('client')) {

                return 'client';
                
            } else {
                return 'sorry tidak tersedia';
            }

        } catch (\Exception $e) {

            return dd($e->getMessage());
        }
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        try {

            if (Auth::user()->hasRole('owner')) {
                return view('production.talent.create');
            }

        } catch (\Exception $e) {
            
            return dd($e->getMessage());
        }
    } // berhasil

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            if (Auth::user()->hasRole('owner')) 
            {
                //
                $validator = Validator::make($request->all(), [
                    'name' => 'required|string|max:255',
                    'email' => 'required|email|unique:users,email',
                    'role' => 'required|string',
                    'password' => 'required|string|min:8',
                ]);

                if ($validator->fails()) {
                    return redirect()->route('client.create') // Ganti dengan rute yang sesuai
                        ->withErrors($validator)
                        ->withInput();
                }

                $talent = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'role' => 'talent',
                    'password' => Hash::make($request->password),
                    'backup_password' => Crypt::encrypt($request->password),
                ]);

                // membuat akses untuk akun.
                $talent->assignRole('talent');

                $scanUser = User::orderBy('created_at', 'desc')->first();
                // return dd($scanUser->id);

                Talent::create([
                    'user_id' => $scanUser->id,
                ]);

                Alert::success('Success', 'Data Anda berhasil ditambah.')->autoclose(3000);

                return Redirect::route('owner.talent.index');
                // return "bercanda";
            }

        } catch (\Exception $e) {

            return dd($e->getMessage());
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {

            if (Auth::user()->hasRole('owner')) {
                
                $data = Talent::findOrFail($id);
                $backupPass = Crypt::decrypt($data->user->backup_password);
                $birthDate = Carbon::parse($data->birthday);
                $currentDate = Carbon::now();
                $age = $currentDate->diffInYears($birthDate);
    
                return view('production.talent.show',
                compact(
                    'data',
                    'backupPass',
                    'age',
                ));
            }

        } catch (\Exception $e) {
            
            return dd($e->getMessage());
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {

            if (Auth::user()->hasRole('owner')) { // jika ada owner
                //
                $data = Talent::findOrFail($id);
                $backupPass = Crypt::decrypt($data->user->backup_password);
    
                return view('production.talent.edit',
                compact(
                    'data',
                    'backupPass',
                ));
            }

        } catch (\Exception $e) {
            
            return dd($e->getMessage());
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            if (Auth::user()->hasRole('owner')) {

                // Validasi data yang dikirimkan melalui formulir
                $validator = Validator::make($request->all(), [
                    'name' => 'required|string|max:255',
                    'email' => 'required|email',
                    'password' => 'required|string|min:6',
                    'gender' => 'required|string',
                    'fullname' => 'required|string|max:255',
                    'nick_name' => 'required|string|max:255',
                    'birthday' => 'required|date',
                    'phone' => 'required|string|max:20',
                ]);
    
                // menyimpan data gambar di folder dan
                // menamakan nama folder berdasarkan kategori
                // kategori dari barang tersebut di simpan
                // di $namafile
    
                //jika ada gambar
                if($request->hasFile('profile_picture')
                && $request->file('profile_picture')->isValid()) { // jika ada file
                    
                    $validator = Validator::make($request->all(), [
                        'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan Anda
                    ]);
    
                    if ($validator->fails()) {
                        return redirect()->route('owner.talent.edit',[$id]) // Ganti dengan rute yang sesuai
                            ->withErrors($validator)
                            ->withInput();
                    }
    
                    // START - proses untuk upload foto profile
                
                    $namafile = $request->input('nick_name');
                    
                    $gambar = $request->file('profile_picture');
                    $namaGambar = time() . '-' . $gambar->getClientOriginalName();
                    $path = 'foto-produk/' . $namafile . '/'; // Path penyimpanan
                
                    // $gambar->move($path, $namaGambar, 'public');
                    // $this->createDirectoryIfNotExists(public_path($path));
                    // Manipulasi gambar (resize dan simpan versi terkompresi)
                    
                    if (!File::exists($path)) {
                        File::makeDirectory($path, $mode = 0777, true, true);
                        // $mode = 0777 mengatur izin untuk direktori yang baru dibuat
                    }
                    $compressedImage = Image::make($gambar)
                    ->resize(500, 500, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->encode('jpg', 75)
                    ->save(public_path('foto-produk/'.$namafile.'/' . $namaGambar)); 
                    
                    // Cek apakah direktori sudah ada, jika belum, buat direktori baru
                    // if (!Storage::exists($path)) {
                    //     Storage::makeDirectory($path, 0777, true); // Buat direktori dengan izin 0777
                    // }
                    // $gambar->move($path,$namaGambar);
                
                    // Simpan gambar ke direktori yang baru dibuat
                    // $gambar->move($path);
    
                    // END - proses untuk upload foto profile
                
                    
                    // Update data pengguna berdasarkan ID
                    $client = Talent::findOrFail($id);
                    $client->update([
                        'gender' => $request->input('gender'),
                        'fullname' => $request->input('fullname'),
                        'nick_name' => $request->input('nick_name'),
                        'birthday' => $request->input('birthday'),
                        'phone' => $request->input('phone'),
                        'profile_picture' => $namaGambar,
                    ]);
    
                    User::where('id',$client->user_id)->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'backup_password' => Crypt::encrypt($request->password),
                    ]);
                    
                } else if (!$request->hasFile('profile_picture')) { // jika tidak ada foto
                    
                    if ($validator->fails()) {
                        return redirect()->route('owner.talent.edit',[$id]) // Ganti dengan rute yang sesuai
                            ->withErrors($validator)
                            ->withInput();
                    }
    
                    $client = Talent::findOrFail($id);
                    $client->update([
                        'gender' => $request->input('gender'),
                        'fullname' => $request->input('fullname'),
                        'nick_name' => $request->input('nick_name'),
                        'birthday' => $request->input('birthday'),
                        'phone' => $request->input('phone'),
                    ]);
    
                    User::where('id',$client->user_id)->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'backup_password' => Crypt::encrypt($request->password),
                    ]);
                    
                } else {
                    return 'maaf';
                }
    
                Alert::success('Success', 'Data Anda berhasil diperbarui.')->autoclose(3000);
    
                return Redirect::route('owner.talent.index');
                // end-controller
            } // berhasil

        } catch (\Exception $e) {
            
            return dd($e->getMessage());
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            if (Auth::user()->hasRole('owner')) {
                //
                $talent  = Talent::findOrFail($id);
                
                // Hapus data terkait dari tabel USER jika ada
                if ($talent->user) {
                    $talent->user->delete();
                }
    
                // Hapus data dari tabel TALENT
                $talent->delete();

                Alert::success('Success', 'Data Anda berhasil dihapus.')->autoclose(3000);
    
                return Redirect::route('owner.talent.index');
                // end-controller
            }    
        } catch (\Exception $e) {
            
            return dd($e->getMessage());
        }
        
    }
}
