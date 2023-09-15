<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Talent;
use App\Models\Client;

use Auth;
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

class ProfileAccountController extends Controller
{
    //
    public function index()
    {
        return view('production.profile_account.index');
    }

    //
    public function edit($id)
    {
        $data = User::findOrFail($id);
        
        return view('production.profile_account.edit',
            compact(
                'data',
        ));
    }

    //
    public function update(Request $request,$id)
    {
        
        if (Auth::user()->hasRole('talent')) 
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $id,
                'fullname' => 'required|string|max:255',
                'phone' => 'required|string|max:15',
            ]); // Membuat aturan validasi kustom

            if ($validator->fails()) {
                Alert::error('Error', 'Data Anda memiliki kesalahan.');
                return redirect()->route('talent.profile.edit', $id)
                    ->withErrors($validator)
                    ->withInput();
            } // Memeriksa apakah validasi berhasil

            $user = User::findOrFail($id); // untuk mencari data
            $userId = $user->id; // untuk mengambil id di user
            
            User::where('id',$id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]); // proses update

            Client::where('user_id',$userId)->update([
                'fullname' => $request->fullname,
                'phone' => $request->phone,
            ]); // proses update
            
            // Setelah berhasil mengupdate, tampilkan Sweet Alert
            Alert::success('Success', 'Data Anda berhasil diperbarui.')->autoclose(3000);

            return Redirect::route('talent.profile.index');
        } // berhasil

        if (Auth::user()->hasRole('client'))
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $id,
                'fullname' => 'required|string|max:255',
                'phone' => 'required|string|max:15',
            ]); // Membuat aturan validasi kustom

            if ($validator->fails()) {
                Alert::error('Error', 'Data Anda memiliki kesalahan.');
                return redirect()->route('client.profile.edit', $id)
                    ->withErrors($validator)
                    ->withInput();
            } // Memeriksa apakah validasi berhasil

            $user = User::findOrFail($id); // untuk mencari data
            $userId = $user->id; // untuk mengambil id di user
            
            User::where('id',$id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]); // proses update

            Client::where('user_id',$userId)->update([
                'fullname' => $request->fullname,
                'phone' => $request->phone,
            ]); // proses update
            
            // Setelah berhasil mengupdate, tampilkan Sweet Alert
            Alert::success('Success', 'Data Anda berhasil diperbarui.')->autoclose(3000);

            return Redirect::route('client.profile.index');
        } // berhasil

        // $client->update([
        //     'gender' => $request->input('gender'),
        //     'fullname' => $request->input('fullname'),
        //     'nick_name' => $request->input('nick_name'),
        //     'birthday' => $request->input('birthday'),
        //     'phone' => $request->input('phone'),
        //     'profile_picture' => $namaGambar,
        // ]);

        // User::where('id',$client->user_id)->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'backup_password' => Crypt::encrypt($request->password),
        // ]);
        
    }
}
