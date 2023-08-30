<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriTalent extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder KategoriTalentTableSeeder
     * php artisan db:seed --class=KategoriTalentTableSeeder
     * Happy Coding :)
     */

     protected $primaryKey = 'id';
     protected $table = 'kategori_talent';
 
     protected $fillable = [
         'kode_id',
         'kode_nomor',
         'nama',
         'slug',
         'deskripsi',
     ];
 
     // public function products()
     // {
     //     return $this->hasMany(Product::class);
     // }
}
