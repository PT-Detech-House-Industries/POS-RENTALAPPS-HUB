<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTalent extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'service_talent';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'service_code',
        'service_sort',
        'service_kind',
        'service_name',
        'duration',
        'price_service',
        'description',
        'point',
    ];
}
