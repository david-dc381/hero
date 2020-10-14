<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heroe extends Model
{
    protected $table = 'heroes';

    publiC function level() {
        return $this->hasOne("App\Level", "id", "level_id");
    }
}
