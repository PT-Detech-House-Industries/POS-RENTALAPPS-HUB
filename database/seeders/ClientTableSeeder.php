<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed clients data
        Client::create([
            'user_id' => 4,
            'gender' => 'Male',
            'fullname' => 'Edward Kristian Mangare',
            'nick_name' => 'edward.mangare',
            'birthday' => '1990-05-15',
            'phone' => '1234567890',
            'profile_picture' => 'edward_profile.jpg',
        ]);

        // Client::create([
        //     'user_id' => 6,
        //     'gender' => 'Male',
        //     'fullname' => 'Budi',
        //     'nick_name' => 'budi.mangare',
        //     'birthday' => '1990-05-15',
        //     'phone' => '1234567890',
        //     'profile_picture' => 'edward_profile.jpg',
        // ]);
    }
}
