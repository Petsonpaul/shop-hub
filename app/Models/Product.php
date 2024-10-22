<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use hasFactory;

    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'slug',
        'images',
        'description',
        'price',
        'is_active',
        'is_featured',
        'in_stock',
        'on_sale',
    ];

    protected $casts = [
        'images'=>'array',
    ];

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function brand(){
        return $this->belongsTo(brand::class);
    }

    public function orderitem(){
        return $this->hasMany(OrderItem::class);
    }
}
