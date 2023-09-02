<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Talent;

class TalentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Talent::create([
            'user_id' => 2,
            // 'kategori_talent_id' => 2,
            'kode_id' => 'TL', // kode data
            'kode_nomor' => '00001', //nomor urut data
            'nickname' => 'Joy', // nama Talent
            'slug' => 'joy', // unutk link 
        ]);
    }
}
