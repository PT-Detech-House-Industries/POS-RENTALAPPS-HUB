<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

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
            'name' => 'owner',
            'email' => 'owner@nihonuwu.com',
            'password' => \Hash::make('12345678'),
            'backup_password' => Crypt::encrypt('12345678'),
            'role' => 'owner',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => \Hash::make('12345678'),
            'backup_password' => Crypt::encrypt('12345678'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'joy',
            'email' => 'joy@gmail.com',
            'password' => \Hash::make('12345678'),
            'backup_password' => Crypt::encrypt('12345678'),
            'role' => 'talent',
        ]);

        User::create([
            'name' => 'edward',
            'email' => 'edward@gmail.com',
            'password' => \Hash::make('12345678'),
            'backup_password' => Crypt::encrypt('12345678'),
            'role' => 'client',
        ]);

        User::create([
            'name' => 'lili',
            'email' => 'lili@gmail.com',
            'password' => \Hash::make('12345678'),
            'backup_password' => Crypt::encrypt('12345678'),
            'role' => 'talent',
        ]);

        User::create([
            'name' => 'budi',
            'email' => 'budi@gmail.com',
            'password' => \Hash::make('12345678'),
            'backup_password' => Crypt::encrypt('12345678'),
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
