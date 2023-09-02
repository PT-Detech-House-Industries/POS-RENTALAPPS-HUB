<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentDislike extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentDislikeTableSeeder
     * Happy Coding :)
     */

    protected $primaryKey = 'id';
    protected $table = 'talent_dislike';

    protected $fillable = [
        'talent_id',
        'deskripsi_dislike',
    ];
}
