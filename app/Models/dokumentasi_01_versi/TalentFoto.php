<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentFoto extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentFotoTableSeeder
     * Happy Coding :)
     */

    protected $primaryKey = 'id';
    protected $table = 'talent_foto';

    protected $fillable = [
        'talent_id',
        'foto_profile',
        'foto_album',
        'foto_talent',
        'foto_ktp',
    ];
}
