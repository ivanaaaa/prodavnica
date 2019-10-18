<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifikacija extends Model
{
    protected $table = 'notifikacii';
    protected $fillable = [
        'id_produkt', 'prethodna_cena',
    ];

    public function produkt(){
        return $this->hasOne('App\Produkt', 'id', 'id_produkt');
    }
}
