<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppVersion extends Model
{
    use HasFactory;

    protected $table = 'app_versions'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'version',
        'keterangan',
    ];
}
