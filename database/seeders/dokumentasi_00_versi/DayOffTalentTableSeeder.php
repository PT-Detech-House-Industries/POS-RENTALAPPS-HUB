<?php

use App\Models\dayOffTalent;
use Illuminate\Database\Seeder;

class DayOffTalentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        dayOffTalent::create([
            'talent_id' => '1',
            'day_off' => 'Wednesday',
        ]);
    }
}
