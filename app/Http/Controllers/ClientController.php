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

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
            'backup_password' => Crypt::encrypt($request->password),
        ]);

        $scanUser = User::orderBy('created_at', 'desc')->first();
        // return dd($scanUser->id);

        Client::create([
            'user_id' => $scanUser->id,
        ]);

        return Redirect::route('client.index');
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
            return redirect()->route('client.create') // Ganti dengan rute yang sesuai
                ->withErrors($validator)
                ->withInput();
        }
        
        // Update data pengguna berdasarkan ID
        $client = Client::findOrFail($id);
        $client->update([
            'gender' => $request->input('gender'),
            'fullname' => $request->input('fullname'),
            'nick_name' => $request->input('nick_name'),
            'birthday' => $request->input('birthday'),
            'phone' => $request->input('phone'),
        ]);

        // Upload dan simpan gambar profil jika ada
        if ($request->hasFile('profile_picture')) {
            $imagePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $client->update(['profile_picture' => $imagePath]);
        }

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

        return Redirect::route('client.index');
    }
}
