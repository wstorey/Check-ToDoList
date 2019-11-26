<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable =[
        "name",
        "todo_id"
    ];

    public function todos() {
        return $this->belongsToMany(Item::class);
    }
}
