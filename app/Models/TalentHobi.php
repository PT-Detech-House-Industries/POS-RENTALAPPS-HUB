<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentHobi extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentHobiTableSeeder
     * Happy Coding :)
     */

    protected $primaryKey = 'id';
    protected $table = 'talent_hobi';

    protected $fillable = [
        'talent_id',
        'deskripsi_hobi',
    ];
}
