<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TalentSifat;

class TalentSifatTableSeeder extends Seeder
{
    /**
     * Next Step.
     * DatabaseSeeder = TalentSifatTableSeeder::class,
     * php artisan db:seed --class=TalentSifatTableSeeder
     * Happy Coding :)
     */
    public function run()
    {
        //
        TalentSifat::create([
            'talent_id' => 1,
            'deskripsi_sifat' => 'manja',
            'status_sifat' => 'positif',
        ]);
    }
}
