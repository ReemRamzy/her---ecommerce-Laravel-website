<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{


    public function orderitem()

    {
        return $this->hasMany(OrderItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

