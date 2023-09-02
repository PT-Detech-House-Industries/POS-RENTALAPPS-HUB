<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TalentBiodata;

class TalentBiodataTableSeeder extends Seeder
{
    /**
     * Next Step.
     * DatabaseSeeder = TalentBiodataTableSeeder::class,
     * php artisan db:seed --class=TalentBiodataTableSeeder
     * Happy Coding :)
     */
    public function run()
    {
        //
        TalentBiodata::create([
            'talent_id' => 1,
            'nama' => null,
            'tempat_lahir' => null,
            'tanggal_lahir' => null,
            'jenis_kelamin' => null,
            'golongan_darah' => null,
            'alamat' => null,
            'rt_rw' => null,
            'kel_desa' => null,
            'kecamatan' => null,
            'kabupaten' => null,
            'provinsi' => null,
            'agama' => null,
            'status_perkawinan' => null,
            'pekerjaan' => null,
            'kewarganegaraan' => null,
        ]);
    }
}
