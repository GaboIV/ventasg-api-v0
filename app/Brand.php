<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {
	
    protected $fillable = [
        'description', 
        'image'
    ];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute() {
        return ($this->image) ? url("images/marcas/$this->image") : null;
    }
}
