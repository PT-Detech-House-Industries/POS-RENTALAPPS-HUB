<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentFisik extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentFisikTableSeeder
     * php artisan db:seed --class=TalentFisikTableSeeder
     * Happy Coding :)
     */

    protected $primaryKey = 'id';
    protected $table = 'talent_fisik';

    protected $fillable = [
        'talent_id',
        'tinggi_badan',
        'berat_badan',
        'warna_kulit',
        'warna_rambut',
    ];
}
