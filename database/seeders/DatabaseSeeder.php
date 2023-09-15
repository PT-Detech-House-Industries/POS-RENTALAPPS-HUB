<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // CategoryProductTableSeeder::class,
            // KategoriTalentTableSeeder::class,
            
            AppVersionSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            TalentTableSeeder::class,
            ClientTableSeeder::class,
            ServiceTalentTableSeeder::class,
            OrderServiceTableSeeder::class,
            OrderDetailTableSeeder::class,
            OrderTempTableSeeder::class,
            // TalentAkunPembayaranTableSeeder::class,
            // TalentSifatTableSeeder::class,
            // TalentFisikTableSeeder::class,
            // TalentHobiTableSeeder::class,
            // TalentLikeTableSeeder::class,
            // TalentDislikeTableSeeder::class,
            // TalentBiodataTableSeeder::class,
            // TalentFotoTableSeeder::class,
            // TalentSuaraTableSeeder::class,
            // TalentRatingTableSeeder::class,
            // TalentDeskripsiTableSeeder::class,
            // TalentServiceTableSeeder::class,
            // TalentSocialMediaTableSeeder::class,
            // // KategoriSuplierTableSeeder::class,
            // tambahkan seeder lainnya di sini jika ada
        ]);
    }
}
