<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\File;
use Illuminate\Notifications\Notifiable;

class Product extends Model {
    use Notifiable;

    // protected $with = ["product_command", "product_cash"];

    protected $fillable = [
        'code', 
        'description',
        'unit_id',
        'presentation',
        'brand_id',
        'group_id',
        'subgroup_id',
        'prize_1',
        'created_at',
        'updated_at'
    ];

    public function getImagenAttribute() {
        $img = $this->id . '.png';
        $ruta = '/app/public/productos/' . $this->id . '.png';
        if ( file_exists( storage_path($ruta) ) ) {
            return $img;
        } else {
            return null;
        }
    }

    // public function product_command() {
    //     return $this->hasOne(ProductosComanda::class, 'producto_id', 'id');
    // }

    // public function product_cash() {
    //     return $this->hasOne(ProductoCaja::class, 'producto_id', 'id');
    // }
}
