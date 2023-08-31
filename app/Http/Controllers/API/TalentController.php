<?php

namespace App\Http\Controllers\API;

use App\Models\Talent;

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
