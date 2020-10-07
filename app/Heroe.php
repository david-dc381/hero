<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heroe extends Model
{
    protected $table = 'heroes';

    $heroes = App\Hero::all();

    foreach ($heroes as $heroe) {
        echo $hero->hp;
    }
}
