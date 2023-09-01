<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Talent;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TalentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      try {
        // $data = Talent::all();
        $namaTalent = Talent::all();

        $data = [];

        foreach ($namaTalent as $dt) {
          $data[] = [
            'id'=> $dt->id,
            'title'=> 'Akemi Yuu',
            'description'=> $dt->kode_id,
            'price'=> 80000,
            'discountPercentage'=> 12.96,
            'rating'=> 4.8,
            'stock'=> 1,
            'brand'=> $dt->nickname,
            'category'=> 'talent',
            'thumbnail'=> 'https://i.dummyjson.com/data/products/1/thumbnail.jpg',
            'images' => [
              'https://i.dummyjson.com/data/products/1/1.jpg',
              'https://i.dummyjson.com/data/products/1/2.jpg',
              'https://i.dummyjson.com/data/products/1/3.jpg',
              'https://i.dummyjson.com/data/products/1/4.jpg',
              'https://i.dummyjson.com/data/products/1/thumbnail.jpg'
            ],
          ];  
        }

        return response()->json([
          'status' => 200,
          'status_message' => 'success',
          'text_message' => 'Data berhasil ditampilkan',
          'products' => $data,
        ], 200);

      } catch (\Exception $e) {
        return response()->json([
          'status' => 'error',
          'message' => 'Gagal menampilkan data',
          'error' => $e->getMessage(),
        ], 500);
      }

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
        try {
          
          User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
          ]);

          $scanUser = User::orderBy('created_at', 'desc')->first();
          // return dd($scanUser->id);
          Talent::create([
            'user_id' => $scanUser->id,
            'kategori_talent_id' => 2,
          ]);

          $data = 'berhasil';
          return response()->json([
            'status' => 201,
            'status_message' => 'success',
            'text_message' => 'Data berhasil disimpan',
            'products' => $data,
          ], 200);

        } catch (\Excetption $e) {
          return response()->json([
            'status' => 'error',
            'message' => 'Gagal menyimpan data',
            'error' => $e->getMessage(),
          ], 500);
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
        //
        try {
          // $data = 'ID Talent '.$id.' Berhasil';
          
          $data = Talent::where('id', $id)->first();
          // $data = BarangStok::findOrFail($id);

          return response()->json([
            'status' => 200,
            'status_message' => 'success',
            'text_message' => 'Data berhasil ditampilkan',
            'products' => $data,
          ], 200);

        } catch (\Excetption $e) {
          return response()->json([
            'status' => 'error',
            'message' => 'Gagal menyimpan data',
            'error' => $e->getMessage(),
          ], 500);
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
        //
        try {
          // return dd($request->coba);
          // $data = 'berhasil';
          // $task = Talent::findOrFail($id);
          // $task->update([
          //   'nickname' => $request->name,
          // ]);

          // Talent::where('id',$id)->update([
          //   // 'nama' => $request->nama,
          //   // 'slug' => Str::slug($request->nama),
          //   // 'deskripsi' => $request->deskripsi,
          //   // 'nama' => $request->nama,
          //   // 'slug' => Str::slug($request->nama),
          //   'nickname' => $request->nickname,
          // ]);

          $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
          ];

          return response()->json([
            'status' => 200,
            'status_message' => 'success',
            'text_message' => 'Data berhasil mengubah data',
            'products' => $data,
          ], 200);

        } catch (\Excetption $e) {
          return response()->json([
            'status' => 'error',
            'message' => 'Gagal menyimpan data',
            'error' => $e->getMessage(),
          ], 500);
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
        //
        // try {
        //   $data = 'berhasil';
        //   return response()->json([
        //     'status' => 200,
        //     'status_message' => 'success',
        //     'text_message' => 'Data berhasil dihapus',
        //     'products' => $data,
        //   ], 200);

        // } catch (\Excetption $e) {
        //   return response()->json([
        //     'status' => 'error',
        //     'message' => 'Gagal menyimpan data',
        //     'error' => $e->getMessage(),
        //   ], 500);
        // }

        try {
          // $data = BarangStok::find($id);
        	// $data->delete();
          
          $barang = Talent::findOrFail($id);
          $barang->delete();
          
          return response()->json([
              'message' => 'Data berhasil dihapus'
          ], 204);

        } catch (\Exception $e) {
            
          return response()->json([
            'message' => 'Data tidak ditemukan'
          ], 404);
        }
    }
}
