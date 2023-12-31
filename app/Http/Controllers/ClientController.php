<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;

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

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            // membuat owner yang bisa memiliki akses untuk membuat user akun.
            $data = Client::all();
            // $data = User::where('role', '!=', 'owner')->get();

            foreach ($data as $d) {
                $birthDate = Carbon::parse($d->birthday);
                $currentDate = Carbon::now();
                $d->age = $currentDate->diffInYears($birthDate);
            }

            // return dd($data);

            return view('production.client.index',
            compact(
                'data',
            ));    
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
        return view('production.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        $client = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
            'backup_password' => Crypt::encrypt($request->password),
        ]);
        
        // membuat akses untuk akun.
        $client->assignRole($request->role);

        $scanUser = User::orderBy('created_at', 'desc')->first();
        // return dd($scanUser->id);

        Client::create([
            'user_id' => $scanUser->id,
        ]);

        return Redirect::route('owner.client.index');
        // return "bercanda";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Client::findOrFail($id);
        $backupPass = Crypt::decrypt($data->user->backup_password);
        $birthDate = Carbon::parse($data->birthday);
        $currentDate = Carbon::now();
        $age = $currentDate->diffInYears($birthDate);

        return view('production.client.show',
        compact(
            'data',
            'backupPass',
            'age',
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Client::findOrFail($id);
        $backupPass = Crypt::decrypt($data->user->backup_password);

        return view('production.client.edit',
        compact(
            'data',
            'backupPass',
        ));
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
        //
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
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan Anda
        ]);

        if ($validator->fails()) {
            return redirect()->route('client.edit',[$id]) // Ganti dengan rute yang sesuai
                ->withErrors($validator)
                ->withInput();
        }

        // menyimpan data gambar di folder dan
        // menamakan nama folder berdasarkan kategori
        // kategori dari barang tersebut di simpan
        // di $namafile

        if ($request->hasFile('profile_picture')) {
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
        }
        
        // Update data pengguna berdasarkan ID
        $client = Client::findOrFail($id);
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

        return Redirect::route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $client  = Client::findOrFail($id);
        
        // Hapus data terkait dari tabel User jika ada
        if ($client->user) {
            $client->user->delete();
        }

        // Hapus data dari tabel Client
        $client->delete();

        return Redirect::route('owner.client.index');
    }
}
