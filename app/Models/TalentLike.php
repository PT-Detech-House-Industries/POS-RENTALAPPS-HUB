<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentLike extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentLikeTableSeeder
     * Happy Coding :)
     */
    protected $primaryKey = 'id';
    protected $table = 'talent_like';

    protected $fillable = [
        'talent_id',
        'deskripsi_like',
    ];
}
