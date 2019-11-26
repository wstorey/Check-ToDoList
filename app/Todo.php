<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    protected $fillable =[
        "name",
        "user_id"
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function items() {
        return $this->belongsToMany(Item::class);
    }
}
