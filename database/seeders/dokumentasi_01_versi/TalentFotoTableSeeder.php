<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TalentFoto;

class TalentFotoTableSeeder extends Seeder
{
    /**
     * Next Step.
     * DatabaseSeeder = TalentFotoTableSeeder::class,
     * php artisan db:seed --class=TalentFotoTableSeeder
     * Happy Coding :)
     */
    public function run()
    {
        //
        TalentFoto::create([
            'talent_id' => 1,
            'foto_profile' => null,
            'foto_album' => null,
            'foto_talent' => null,
            'foto_ktp' => null,
        ]);
    }
}
