<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderService extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'order_service';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'invoice',
        'start_service',
        'end_service',
        'total_payment',
        'status_order',
    ];
}
