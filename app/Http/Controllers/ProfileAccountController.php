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

class ProfileAccountController extends Controller
{
    //
    public function index()
    {
        $data = Talent::all();
        // return dd($data);
        return view('production.profile_account.index',
            compact(
                'data',
        ));
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

        // $user = User::findOrFail($id);
        User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

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

        return Redirect::route('talent.profile.index');
    }
}
