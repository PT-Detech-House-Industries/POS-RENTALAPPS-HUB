<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentBiodata extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentBiodataTableSeeder
     * Happy Coding :)
     */
    protected $primaryKey = 'id';
    protected $table = 'talent_biodata';

    protected $fillable = [
        'talent_id',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'golongan_darah',
        'alamat',
        'rt_rw',
        'kel_desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'agama',
        'status_perkawinan',
        'pekerjaan',
        'kewarganegaraan',
    ];
}
