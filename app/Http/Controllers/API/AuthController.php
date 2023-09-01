<?php

namespace App\Http\Controllers\API;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
      try {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, kembalikan respons berhasil
            $user = Auth::user();

            return response()->json([
              'message' => 'Login berhasil',
              'data' => [
                'name' => $user->name,
                'email' => $user->email,
                // tambahkan properti lain yang ingin Anda tampilkan
              ]
            ], 200);
        } else {
            // Jika autentikasi gagal, kembalikan pesan error
            return response()->json(['message' => 'Gagal login'], 401);
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = User::all();
        return response()->json($data);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = User::all();
        return response()->json($data);
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
    }
}
