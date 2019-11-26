<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    protected $fillable =[
        "name"
    ];
    public function user() {
        return $this->belongsTo('App\User','id');
    }

    public function items() {
        return $this->belongsToMany(Todo::class);
    }
}
