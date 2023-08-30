<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TalentSuara;

class TalentSuaraTableSeeder extends Seeder
{
    /**
     * Next Step.
     * DatabaseSeeder = TalentSuaraTableSeeder::class,
     * php artisan db:seed --class=TalentSuaraTableSeeder
     * Happy Coding :)
     */
    public function run()
    {
        //
        TalentSuara::create([
            'talent_id' => 1,
            'suara_profile' => null,
        ]);
    }
}
