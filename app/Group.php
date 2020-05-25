<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

    protected $fillable = [
        'description', 
        'touch',
        'order_touch',
        'color'
    ];
}
