<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentRating extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentRatingTableSeeder
     * Happy Coding :)
     */
    protected $primaryKey = 'id';
    protected $table = 'talent_rating';

    protected $fillable = [
        'talent_id',
        'nilai_rating',
        'detail_review',
    ];
}
