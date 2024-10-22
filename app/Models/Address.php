<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use hasFactory;

    protected $fillable = [
        'order_id',
        'first_name',
        'last_name',
        'email', 
        'phone',
        'address',
        'city',
        'state',
        'zip_code',
        
    ];

    public function order(){
        return $this->order(order::class);
    }

    public function getFullAttribute(){
        return "{$this->first_name} {$this->last_name}";
    }
}
