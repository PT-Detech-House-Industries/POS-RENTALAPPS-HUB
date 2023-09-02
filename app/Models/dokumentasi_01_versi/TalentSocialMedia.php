<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentSocialMedia extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentSocialMediaTableSeeder
     * Happy Coding :)
     */

    protected $primaryKey = 'id';
    protected $table = 'talent_social_media';

    protected $fillable = [
        'talent_id',
        'whatsapp_number',
        'telegram_number',
        'email',
        'instagram_account',
        'twitter_account',
        'tiktok_account',
    ];
}
