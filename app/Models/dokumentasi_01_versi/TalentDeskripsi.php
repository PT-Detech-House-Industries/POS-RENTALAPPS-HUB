<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentDeskripsi extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentDeskripsiTableSeeder
     * Happy Coding :)
     */
    protected $primaryKey = 'id';
    protected $table = 'talent_deskripsi';

    protected $fillable = [
        'talent_id',
        'deskripsi_singkat',
    ];
}
