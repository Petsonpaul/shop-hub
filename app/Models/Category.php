<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use hasFactory;

    protected $fillable = ['name', 'slug', 'description', 'image', 'is_active'];

    public function products(){
        return $this->hasMany(product::class);
    }
}
