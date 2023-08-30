<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentTableSeeder
     * php artisan db:seed --class=TalentTableSeeder
     * Happy Coding :)
     */

    protected $primaryKey = 'id';
    protected $table = 'talent';

    protected $fillable = [
        'user_id',
        'kategori_talent_id',
        'kode_id',
        'kode_nomor',
        'nickname',
        'slug',
        'status',
    ];
    
    public function akun_pembayaran()
    {
        // return $this->hasOne('App\Models\Talent','user_id');
        // return $this->hasOne('App\Models\TalentBiodata', 'talent_id');
        // return $this->belongsTo(Talent::class);
    }

    public function biodata()
    {
        // return $this->hasOne('App\Models\Talent','user_id');
        return $this->hasOne('App\Models\TalentBiodata', 'talent_id');
        // return $this->belongsTo(Talent::class);
    }

    public function deskripsi()
    {
        // return $this->hasOne('App\Models\Talent','user_id');
        // return $this->hasOne('App\Models\TalentBiodata', 'talent_id');
        // return $this->belongsTo(Talent::class);
    }

    public function dislike()
    {
        // return $this->hasOne('App\Models\Talent','user_id');
        // return $this->hasOne('App\Models\TalentBiodata', 'talent_id');
        // return $this->belongsTo(Talent::class);
    }

    public function domisili()
    {
        // return $this->hasOne('App\Models\Talent','user_id');
        // return $this->hasOne('App\Models\TalentBiodata', 'talent_id');
        // return $this->belongsTo(Talent::class);
    }

    public function fisik()
    {
        // return $this->hasOne('App\Models\Talent','user_id');
        // return $this->hasOne('App\Models\TalentBiodata', 'talent_id');
        // return $this->belongsTo(Talent::class);
    }

    public function foto()
    {
        // return $this->hasOne('App\Models\Talent','user_id');
        // return $this->hasOne('App\Models\TalentBiodata', 'talent_id');
        // return $this->belongsTo(Talent::class);
    }

    public function hobi()
    {
        // return $this->hasOne('App\Models\Talent','user_id');
        // return $this->hasOne('App\Models\TalentBiodata', 'talent_id');
        // return $this->belongsTo(Talent::class);
    }
}
