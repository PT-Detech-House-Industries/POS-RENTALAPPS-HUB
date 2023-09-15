<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Talent;

class TalentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Talent::create([
                'user_id' => 3,
                'gender' => 'Female',
                'fullname' => 'Taira',
                'nick_name' => 'tiara.female',
                'birthday' => '1998-05-15',
                'phone' => '1234567890',
                'profile_picture' => 'edward_profile.jpg',
            ]);
        }

        //
        // Talent::create([
        //     'user_id' => 2,
        //     // 'kategori_talent_id' => 2,
        //     'kode_id' => 'TL', // kode data
        //     'kode_nomor' => '00001', //nomor urut data
        //     'nickname' => 'Joy', // nama Talent
        //     'slug' => 'joy', // unutk link 
        // ]);

        // Talent::create([
        //     'user_id' => 3,
        //     'gender' => 'Female',
        //     'fullname' => 'Taira',
        //     'nick_name' => 'tiara.female',
        //     'birthday' => '1998-05-15',
        //     'phone' => '1234567890',
        //     'profile_picture' => 'edward_profile.jpg',
        // ]);

        // Talent::create([
        //     'user_id' => 5,
        //     'gender' => 'Female',
        //     'fullname' => 'lili',
        //     'nick_name' => 'lili.female',
        //     'birthday' => '1998-05-15',
        //     'phone' => '1234567890',
        //     'profile_picture' => 'edward_profile.jpg',
        // ]);
    }

    // {
    //     //
    //     Talent::create([
    //         'user_id' => 1,
    //         'id_account' => '230301',
    //         'nickname' => 'Nana',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 2,
    //         'id_account' => '230302',
    //         'nickname' => 'Chan',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 3,
    //         'id_account' => '230303',
    //         'nickname' => 'Audey',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 4,
    //         'id_account' => '230304',
    //         'nickname' => 'Ziiu',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 5,
    //         'id_account' => '230305',
    //         'nickname' => 'Chloe',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 6,
    //         'id_account' => '230306',
    //         'nickname' => 'Yora',
    //         'status' => 'block',
    //     ]);
        
    //     Talent::create([
    //         'user_id' => 7,
    //         'id_account' => '230307',
    //         'nickname' => 'Gwen',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 8,
    //         'id_account' => '230308',
    //         'nickname' => 'Akemi Yuu',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 9,
    //         'id_account' => '230309',
    //         'nickname' => 'Saki',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 10,
    //         'id_account' => '230310',
    //         'nickname' => 'Ana',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 11,
    //         'id_account' => '230311',
    //         'nickname' => 'Tessa',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 12,
    //         'id_account' => '230312',
    //         'nickname' => 'Ling Ling',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 13,
    //         'id_account' => '230313',
    //         'nickname' => 'Lya Akiara',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 14,
    //         'id_account' => '230314',
    //         'nickname' => 'Ciyaa',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 15,
    //         'id_account' => '230315',
    //         'nickname' => 'Vania',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 16,
    //         'id_account' => '230316',
    //         'nickname' => 'Vee Vernox',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 17,
    //         'id_account' => '230317',
    //         'nickname' => 'Tiara',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 18,
    //         'id_account' => '230318',
    //         'nickname' => 'Tasya',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 19,
    //         'id_account' => '230319',
    //         'nickname' => 'Nazeera',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 20,
    //         'id_account' => '230320',
    //         'nickname' => 'Clara',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 21,
    //         'id_account' => '230321',
    //         'nickname' => 'Nona',
    //         'status' => 'block',
    //     ]);


    //     Talent::create([
    //         'user_id' => 22,
    //         'id_account' => '230322',
    //         'nickname' => 'Belle',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 23,
    //         'id_account' => '230323',
    //         'nickname' => 'Yui',
    //         'status' => 'block',
    //     ]);

    //     Talent::create([
    //         'user_id' => 24,
    //         'id_account' => '230324',
    //         'nickname' => 'Zahwa',
    //         'status' => 'block',
    //     ]);
    // }
}
