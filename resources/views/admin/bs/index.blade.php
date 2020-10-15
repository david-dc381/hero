@extends('layouts.app')

@section('content')

    <div class="row">
        <h1>Sistema de Batalla</h1>
    </div>

    <div class="row text-center text-white mt-2">
        <div class="col-3 bg-primary">
            <h2>{{ $heroName }}</h2>
        </div>

        <div class="col bg-warning">
            <h2>VS</h2>
        </div>

        <div class="col-3 bg-danger">
            <h2>{{ $enemyName }}</h2>
        </div>
    </div>

    <div class="row text center text-white mt-2">
        <div class="col-5 bg-primary">
            <img src="{{ asset('images/heroes/' . $heroAvatar) }}" width="150" height="170">
        </div>
   
        <div class="col-2 bg-warning">
            <h2>VS</h2>
        </div>

        <div class="col-5 bg-primary">
            <img src="{{ asset('images/enemies/' . $enemyAvatar) }}" width="150" height="170">
        </div>
    </div>



    <div class="row text center text-white mt-2 bg-info">
        <h2>Eventos de Batalla</h2>
    </div>

    <div class="mt-3">
        @foreach ($events as $event)
            <div class="alert @if($event['winner'] == 'hero') alert-success @else alert-danger @endif" role="alert">
                {{ $event['text'] }}
            </div>
        @endforeach
    </div>
@endsection