@extends ('layouts.app')

@section('content')
<h1>Editar Heroe - {{ $hero->name }}</h1>

<form action="{{ route('heroes.update', ['id' => $hero->id]) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $hero->name }}" placeholder="Ingrese un nombre" require>
  </div>

  <div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" value="{{ $hero->hp }}" placeholder="Ingrese los puntos de vida" require>
  </div>

  <div class="form-group">
    <label for="attack">Ataque</label>
    <input type="number" class="form-control" id="attack" name="attack" value="{{ $hero->attack }}" placeholder="Ingrese los puntos de ataque" require>
  </div>

  <div class="form-group">
    <label for="defense">Defensa</label>
    <input type="number" class="form-control" id="defense" name="defense" value="{{ $hero->defense }}" placeholder="Ingrese los puntos de defensa" require>
  </div>

  <div class="form-group">
    <label for="luck">Suerte</label>
    <input type="number" class="form-control" id="luck" name="luck" value="{{ $hero->luck }}" placeholder="Ingrese los puntos de suerte" require>
  </div>

  <div class="form-group">
    <label for="coins">Monedas</label>
    <input type="number" class="form-control" id="coins" name="coins" value="{{ $hero->coins }}" placeholder="Ingrese la cantidad de monedas" require>
  </div>

  <button type="submit" class="btn btn-warning text-white">Editar</button>
</form>

@endsection