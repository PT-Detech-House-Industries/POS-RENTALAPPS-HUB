<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Mail;
use App\Mail\DemoMail;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $mailData = [

            'title' => 'Mail from ItSolutionStuff.com',

            'body' => 'This is for testing email using smtp.'

        ];

        $test = Mail::to('uwunihon@gmail.com')->send(new DemoMail($mailData));
        return dd($test);
        // return redirect(RouteServiceProvider::HOME);
    }
    // {

    //     $user = User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'role' => $data['role'],
    //         'password' => Hash::make($data['password']),
    //     ]);
        
    //     $idUser = User::all()->last();
    //     $time = Carbon::now()->format('ymd');

    //     if($data['role'] == 'talent')
    //     {   
    //         Talent::create([
    //             'user_id' => $idUser->id,
    //             'nickname' => $idUser->name,
    //             'id_account' => $time.rand(0,999),
    //         ]);

    //         $talent = Talent::where('user_id', $idUser->id)->first();

    //         TalentBio::create([
    //             'talent_id' => $talent->id,
    //         ]);

    //         $data = [
    //             'name' => $idUser->name,
    //             'body' => 'Telah Mendaftar Sebagai Talent Nihon Uwu, Mohon Admin Segera follow up',
    //         ];

    //         Mail::to('uwunihon@gmail.com')->send(new TalentRegisterMail($data));

    //         return $user;
    //     }

    //     if($data['role'] == 'client')
    //     {
    //         Client::create([
    //             'user_id' => $idUser->id,
    //             'nickname' => $idUser->name,
    //             'id_account' => $time.rand(0,999),
    //         ]);

    //         $data = [
    //             'name' => $idUser->name,
    //             'body' => 'Telah Mendaftar Sebagai Client Nihon Uwu.',
    //         ];

    //         Mail::to('uwunihon@gmail.com')->send(new ClientRegisterMail($data));

    //         return $user;
    //     }
        
    // }
}
