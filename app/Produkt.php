<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produkt extends Model
{
    protected $table = 'produkti';
    protected $fillable = [
        'ime', 'id_kategorija', 'slika', 'opis', 'cena',
    ];

    public function kategorija()
    {
        return $this->hasOne('App\Kategorija', 'id', 'id_kategorija');
    }

    public function notifikacija(){
        return $this->hasOne('App\Notifikacija', 'id_produkt');
    }
}
