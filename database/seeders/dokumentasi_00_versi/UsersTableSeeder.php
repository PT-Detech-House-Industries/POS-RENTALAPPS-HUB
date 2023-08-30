<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => \Hash::make('12345678'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'joy',
            'email' => 'joy@gmail.com',
            'password' => \Hash::make('12345678'),
            'role' => 'talent',
        ]);

        User::create([
            'name' => 'edward',
            'email' => 'edward@gmail.com',
            'password' => \Hash::make('12345678'),
            'role' => 'client',
        ]);

        // User::create([
        //     'name' => 'nana',
        //     'email' => 'nana@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'role' => 'talent',
        // ]);
    }
}
