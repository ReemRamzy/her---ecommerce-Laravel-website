<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
     protected $fillable = [
        'title', 'description','color','size','category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
