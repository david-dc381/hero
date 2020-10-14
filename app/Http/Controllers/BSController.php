<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroe;
use App\Enemy;

class BSController extends Controller
{
    public function index () {
        dd($this->runManualBattle(13,5));
        return view('admin.bs.index', $this->runAutoBattle(13,5));
    }

    public function runAutoBattle($heroId, $enemyId) {
        $hero  = Heroe::find(13)->first();
        $enemy = Enemy::find(5)->first();

        $events = [];

        while ($hero->hp > 0 && $enemy->hp > 0) {
            $luck = random_int(0, 100);

            if ($luck >= 50) {
                $hp = $enemy->defense - $hero->attack;

                if ($hp < 0) {
                    $enemy->hp -= $hp * -1;
                }

                if ($enemy->hp > 0) {
                    $event = [
                        "winner" => "hero",
                        "text"   => $hero->name . " hizo un daño de " . $hero->attack . " a " . $enemy->name
                    ];
                } else {
                    $event = [
                        "winner" => "hero",
                        "text"   => $hero->name . " acabó con la vida de " . $enemy->name . " y ganó " . $enemy->experience . " experiencia."

                    ];
                    $hero->experience = $hero->experience + $enemy->experience;

                    if ($hero->experience >= $hero->level->experience) {
                        $hero->experience = 0;
                        $hero->level_id += 1;
                    }

                    $hero->save();
                }

            } else {
                $hp = $hero->defense - $enemy->attack;

                if ($hp < 0) {
                    $hero->hp -= $hp * -1;
                }

                if ($hero->hp > 0) {
                    $event = [
                        "winner" => "enemy",
                        "text"   => $hero->name . " recibió un daño de " . $enemy->attack . " por " . $enemy->name
                    ];
                } else {
                    $event = [
                        "winner" => "enemy",
                        "text"   => $hero->name . " fue asesinado por " . $enemy->name
                    ];
                }
            }
            array_push($events, $event);
        }

        return [
            'events'    =>$events,
            'heroName'  => $hero->name,
            'enemyName' => $enemy->name
        ];
        
    }

    public function runManualBattle($heroId, $enemyId) {
        $hero  = Heroe::find($heroId)->first();
        $enemy = Enemy::find($enemyId)->first();

        $luck = random_int(0, 100);

            if ($luck >= 50) {
                $hp = $enemy->defense - $hero->attack;

                if ($hp < 0) {
                    $enemy->hp -= $hp * -1;
                }

                if ($enemy->hp > 0) {
                    return  [
                        "winner" => "hero",
                        "text"   => $hero->name . " hizo un daño de " . $hero->attack . " a " . $enemy->name
                    ];
                } else {
                    return  [
                        "winner" => "hero",
                        "text"   => $hero->name . " acabó con la vida de " . $enemy->name . " y ganó " . $enemy->experience . " experiencia."

                    ];
                    $hero->experience = $hero->experience + $enemy->experience;

                    if ($hero->experience >= $hero->level->experience) {
                        $hero->experience = 0;
                        $hero->level_id += 1;
                    }

                    $hero->save();
                }

            } else {
                $hp = $hero->defense - $enemy->attack;

                if ($hp < 0) {
                    $hero->hp -= $hp * -1;
                }

                if ($hero->hp > 0) {
                    return  [
                        "winner" => "enemy",
                        "text"   => $hero->name . " recibió un daño de " . $enemy->attack . " por " . $enemy->name
                    ];
                } else {
                    return  [
                        "winner" => "enemy",
                        "text"   => $hero->name . " fue asesinado por " . $enemy->name
                    ];
                }
            }
        }
}
