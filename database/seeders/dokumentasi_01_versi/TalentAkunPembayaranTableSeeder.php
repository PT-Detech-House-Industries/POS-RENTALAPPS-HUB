<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TalentAkunPembayaran;

class TalentAkunPembayaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        TalentAkunPembayaran::create([
            'talent_id' => 1,
            'nama_bank' => 'bank ina',
            'nama_e-wallet' => null,
            'nomor_bank' => '23456789',
            'nomor_e-wallet' => null,
            'nama_pemilik_bank' => 'nana',
            'nama_pemilik_e-wallet' => null,
        ]);
    }
}
