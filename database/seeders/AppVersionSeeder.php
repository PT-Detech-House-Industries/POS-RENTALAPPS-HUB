<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AppVersion;

class AppVersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        AppVersion::create([
            'version' => '1.0.0',
            'keterangan' => 'Versi pertama dari aplikasi web dengan fitur dasar.'
        ]);
    }
}
