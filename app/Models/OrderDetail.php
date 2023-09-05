<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'order_detail';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'invoice',
        'client_id',
        'servicetalent_id',
        'talent_id',
        'price_service',
        'qty_service',
        'start_service',
        'end_service',
        'subtotal_service',
        'status_service',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function talent()
    {
        return $this->belongsTo(Talent::class);
    }

    public function service_talent()
    {
        return $this->belongsTo(ServiceTalent::class, 'servicetalent_id', 'id');
        // return $this->hasMany(ServiceTalent::class);
    }
}
