<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(TalentTableSeeder::class);
        $this->call(TalentBioTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(ServiceTalentTableSeeder::class);
        $this->call(RentServiceTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        // $this->call(RatingTalentTableSeeder::class);
        // $this->call(RatingClientTableSeeder::class);
        // $this->call(ScheduleTalentTableSeeder::class);
        // $this->call(DayOffTalentTableSeeder::class);
    }
}
