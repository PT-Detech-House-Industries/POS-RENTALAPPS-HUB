<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentSifat extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentSifatTableSeeder
     * php artisan db:seed --class=TalentSifatTableSeeder
     * Happy Coding :)
     */

    protected $primaryKey = 'id';
    protected $table = 'talent_sifat';

    protected $fillable = [
        'talent_id',
        'deskripsi_sifat',
        'status_sifat',
    ];
}
