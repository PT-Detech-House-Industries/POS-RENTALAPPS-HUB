<?php

namespace App\Http\Controllers\API;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Laravel\Passport\RefreshToken;
use Laravel\Passport\Token;

class AuthController extends BaseController
{
    protected $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $this->user = 'Auth::user()';
            return $next($request);
            
        });
    }

    public function login(Request $request)
    {
      try {

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        { 

          $user = Auth::user(); 
          $role = Auth::user()->role;
          $success['token'] =  $user->createToken($role)-> accessToken; 
          $success['name'] =  $user->name;

          return $this->sendResponse($success, 'User login successfully.');

        } else { 

          return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 

        Auth::login($data);

        return response()->json([
          'status' => 201,
          'status_message' => 'success',
          'text_message' => 'Data berhasil login',
          'data' => $data,
        ], 201);

      } catch (\Exception $e) {
        
        return response()->json([
          'status' => 'error',
          'message' => 'Gagal menyimpan data',
          'error' => $e->getMessage(),
        ], 500);
      }
    }

    public function logout(Request $request)
    {
        try {
          
          Auth::user()->token()->revoke();
          // return dd($this->user);

          // $user = Auth::guard('web')->logout();

          // $user->tokens->each(function ($token, $key) {
          //     $token->delete();
          // });
          
          // $request->session()->invalidate();

          // $request->session()->regenerateToken();
          
          
          // Auth::logout();

          return response()->json([
            'status' => 200,
            'message' => 'User logged out successfully.',
          ], 200);

        } catch (\Exception $e) {
            
          return response()->json([
            'status' => 'error',
            'message' => 'Gagal logout',
            'error' => $e->getMessage(),
          ], 500);
        }
    }

    public function register(Request $request)
    {
        //
        // $request->validate([
        //   'name' => 'required|string',
        //   'email' => 'required|email|unique:users,email',
        //   'password' => 'required|string|min:6',
        // ]);

        // User::create([
        //   'name' => $request->name,
        //   'email' => $request->email,
        //   'password' => Hash::make($request->password),
        // ]);

        // $data = User::all();
        try {
          User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
          ]);
  
          $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
          ];
  
          return response()->json([
            'status' => 201,
            'status_message' => 'success',
            'text_message' => 'Data berhasil tersimpan',
            'data' => $data,
          ], 201);

        } catch (\Exception $e) {
          
          return response()->json([
            'status' => 'error',
            'message' => 'Gagal menyimpan data',
            'error' => $e->getMessage(),
          ], 500);
        }
        
        // return response()->json($data, 201);
        // return response()->json(['message' => 'Akun berhasil dibuat'], 201);
    }
}