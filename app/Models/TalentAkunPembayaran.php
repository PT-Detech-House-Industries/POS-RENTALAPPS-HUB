<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentAkunPembayaran extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentAkunPembayaranTableSeeder
     * php artisan db:seed --class=TalentAkunPembayaranTableSeeder
     * Happy Coding :)
     */

    protected $primaryKey = 'id';
    protected $table = 'talent_akun_pembayaran';

    protected $fillable = [
        'talent_id',
        'nama_bank',
        'nama_e-wallet',
        'nomor_bank',
        'nomor_e-wallet',
        'nama_pemilik_bank',
        'nama_pemilik_e-wallet',
    ];
}
