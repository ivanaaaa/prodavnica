<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
    protected $table = 'kategorii';
    protected $fillable = [
        'ime',
    ];

    public function produkti(){
        return $this->hasMany('App\Produkt', 'id_kategorija', 'id');
    }
}
