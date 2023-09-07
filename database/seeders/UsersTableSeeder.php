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
        //
        $owner = User::create([
            'name' => 'owner',
            'email' => 'owner@nihonuwu.com',
            'password' => \Hash::make('12345678'),
            'backup_password' => Crypt::encrypt('12345678'),
            'role' => 'owner',
        ]);
        
        $owner->assignRole('owner');

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => \Hash::make('12345678'),
            'backup_password' => Crypt::encrypt('12345678'),
            'role' => 'admin',
        ]);

        $admin->assignRole('admin');
        
        // User::create([
        //     'name' => 'Nur Fitria Andani',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Aulia Nafisah',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Vicka putri triarti purwantoro',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Maria Anes',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);
        
        // User::create([
        //     'name' => 'Devina bunga putri setyana',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Deniyati Tandiseru',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Intan Auwani Iskandar',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Felicia Soetandy',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Putri Zahra Dwinata',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Iftah Awaliyah Afni',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Indah kurnia',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'sri oktalia gunawan',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Nabila Valya Syahira',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Islamiah Suci Cahyaningati',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Amelia Nabila Fitrianti',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Lolyta Wahyuning Pribadi',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Claudya Calvina Izumi',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Eva Zussella',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Vina Noviani',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Dwi Murdiasih',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Debby Ariesca',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Anastasya',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Veridiana irene',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Zaskia nur aini',
        //     'email' => 'joy@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'Edward',
        //     'email' => 'Edward@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'client',
        // ]);

        $talent = User::create([
            'name' => 'joy',
            'email' => 'joy@gmail.com',
            'password' => \Hash::make('12345678'),
            'backup_password' => Crypt::encrypt('12345678'),
            'role' => 'talent',
        ]);

        $talent->assignRole('talent');

        $client = User::create([
            'name' => 'edward',
            'email' => 'edward@gmail.com',
            'password' => \Hash::make('12345678'),
            'backup_password' => Crypt::encrypt('12345678'),
            'role' => 'client',
        ]);

        $client->assignRole('client');

        // User::create([
        //     'name' => 'lili',
        //     'email' => 'lili@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'talent',
        // ]);

        // User::create([
        //     'name' => 'budi',
        //     'email' => 'budi@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'backup_password' => Crypt::encrypt('12345678'),
        //     'role' => 'client',
        // ]);

        // User::create([
        //     'name' => 'nana',
        //     'email' => 'nana@gmail.com',
        //     'password' => \Hash::make('12345678'),
        //     'role' => 'talent',
        // ]);
    }
}
