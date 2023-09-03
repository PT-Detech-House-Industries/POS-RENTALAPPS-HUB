<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'client';

    protected $fillable = [
        'user_id',
        'gender',
        'fullname',
        'nick_name',
        'birthday',
        'phone',
        'profile_picture',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
