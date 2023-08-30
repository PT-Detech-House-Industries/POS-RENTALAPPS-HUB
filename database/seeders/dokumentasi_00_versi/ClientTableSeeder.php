<?php

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
        // Client::create([
        //     'user_id' => 3,
        //     'fullname' => 'edward',
        //     'nickname' => 'ed',
        //     'address' => 'Malang',
        //     'number_wa' => '0812345678',
        //     'bank_account' => '123123 - BCA',
        //     'upload_ktp' => 'ktp.jpg',
        // ]);

        Client::create([
            'user_id' => 3,
            'id_account' => '21021022',
            'nickname' => 'ed',
            'photo_profile' => 'profile.jpg',
            'short_description' => 'client',
            'birthdate' => '2022-02-02',
            'upload_ktp' => 'ktp.jpg',
            'status' => 'active',
        ]);
    }
}
