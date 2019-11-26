<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public function user() {
        return $this->belongsTo('App/User');
    }

    public function items() {
        return $this->belongsToMany(Todo::class);
    }
}
