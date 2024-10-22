<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use hasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
        'unit_amount',
        'total_amount',
        
    ];

    public function order(){
        return $this->belongsTo(order::class);
    }

    public function product(){
        return $this->belongsTo(product::class);
    }
}
