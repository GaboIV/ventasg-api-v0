<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model {

    protected $fillable = [
        'description_sg', 
        'acro_sg', 
        'description_pl',
        'acro_pl'
    ];
}
