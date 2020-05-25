<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subgroup extends Model {

    protected $fillable = [
        'description', 
        'touch',
        'order_touch',
        'group_id'
    ];
}
