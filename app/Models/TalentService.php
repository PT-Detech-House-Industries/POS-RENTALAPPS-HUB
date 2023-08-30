<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentService extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentServiceTableSeeder
     * Happy Coding :)
     */
    protected $primaryKey = 'id';
    protected $table = 'talent_service';

    protected $fillable = [
        'talent_id',
        'status_service',
    ];
}
