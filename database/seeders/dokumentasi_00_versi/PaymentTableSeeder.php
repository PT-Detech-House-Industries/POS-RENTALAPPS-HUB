<?php

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'rent_id' => 1,
            'payment_date' => '2022-7-7',
            'total_amount' => '50000',
            'methode_payment' => 'transfer bank',
            'upload_receipt' => 'upload_receipt,jpg',
        ]);
    }
}
