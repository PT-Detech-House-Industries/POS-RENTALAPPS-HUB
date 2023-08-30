<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentSuara extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentSuaraTableSeeder
     * Happy Coding :)
     */
    protected $primaryKey = 'id';
    protected $table = 'talent_suara';

    protected $fillable = [
        'talent_id',
        'suara_profile',
    ];
}
