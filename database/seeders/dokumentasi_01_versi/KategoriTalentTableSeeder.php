<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriTalent;

class KategoriTalentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Next Step
     * php artisan make:factory KategoriTalent
     * Happy Coding :)
     */
    public function run()
    {
        //
        KategoriTalent::factory()->count(10)->create();
    }
}
