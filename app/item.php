<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function todos() {
        return $this->belongsToMany(Item::class);
    }
}
