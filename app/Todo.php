<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    protected $fillable =[
        "name"
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function items() {
        return $this->belongsToMany(Todo::class);
    }
}
