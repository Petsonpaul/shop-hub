<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use hasFactory;

    protected $fillable = ['name', 'slug', 'image', 'is_active'];

    public function products(){
        return $this->hasMany(product::class);
    }
}
