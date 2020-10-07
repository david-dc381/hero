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
}
