<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Heroe;

class HeroController extends Controller
{
    public function index() {
        $heroes = Heroe::all();
        return view('admin.heroes.index', ['heroes' => $heroes]);
    }

    public function create() {
        return view('admin.heroes.create');
    }

    public function store(Request $request) {
        return $this->saveHero($request, null);
    }

    public function update(Request $request, $id) {
        return $this->saveHero($request, $id);
    }

    // Creamos una función para registro y para la actulización de datos
    public function saveHero(Request $request, $id) {

        if ($id) {
            $hero = Heroe::find($id);
        } else {
            $hero = new Heroe();

            $hero->experience = 0;
            $hero->level_id   = 1;
        }

        $hero->name       = $request->input('name');
        $hero->hp         = $request->input('hp');
        $hero->attack     = $request->input('attack');
        $hero->defense    = $request->input('defense');
        $hero->luck       = $request->input('luck');
        $hero->coins      = $request->input('coins');
        
        $hero->save();
        return redirect()->route('heroes.index');
    }

    public function edit($id) {
        $hero = Heroe::find($id);

        return view('admin.heroes.edit', ['hero' => $hero]);
    }

    public function destroy($id) {
        $hero = Heroe::find($id);
        $hero->delete();
        return redirect()->route('heroes.index');
    }
}
