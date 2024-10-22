<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use hasFactory;

    protected $fillable = [
        'user_id',
        'grand_total',
        'payment_method',
        'payment_status',
        'status',
        'currency',
        'delivery_amount',
        'delivery_method',
        'notes',
    ];

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function items(){
        return $this->hasMany(OrderItem::class);
    }

    public function address(){
        return $this->hasOne(Address::class);
    }
}
