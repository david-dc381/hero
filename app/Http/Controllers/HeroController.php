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
        $hero = new Heroe();

        $hero->name       = $request->input('name');
        $hero->hp         = $request->input('hp');
        $hero->attack     = $request->input('attack');
        $hero->defense    = $request->input('defense');
        $hero->luck       = $request->input('luck');
        $hero->coins      = $request->input('coins');
        $hero->experience = 0;
        $hero->level_id   = 1;

        $hero->save();
        return redirect()->route('admin.heroes');

    }
}
