@extends ('layouts.app')

@section('content')
<h1>Editar Heroe - {{ $enemy->name }}</h1>

<form action="{{ route('enemy.update', ['id' => $enemy->id]) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $enemy->name }}" placeholder="Ingrese un nombre" require>
  </div>

  <div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" value="{{ $enemy->hp }}" placeholder="Ingrese los puntos de vida" require>
  </div>

  <div class="form-group">
    <label for="attack">Ataque</label>
    <input type="number" class="form-control" id="attack" name="attack" value="{{ $enemy->attack }}" placeholder="Ingrese los puntos de ataque" require>
  </div>

  <div class="form-group">
    <label for="defense">Defensa</label>
    <input type="number" class="form-control" id="defense" name="defense" value="{{ $enemy->defense }}" placeholder="Ingrese los puntos de defensa" require>
  </div>

  
  <div class="form-group">
      <label for="coins">Monedas</label>
      <input type="number" class="form-control" id="coins" name="coins" value="{{ $enemy->coins }}" placeholder="Ingrese la cantidad de monedas" require>
  </div>
  
  <div class="form-group">
    <label for="experience">Experiencia</label>
    <input type="number" class="form-control" id="experience" name="experience" value="{{ $enemy->experience }}" placeholder="Ingrese los puntos de suerte" require>
  </div>

  <button type="submit" class="btn btn-warning text-white">Editar</button>
</form>

@endsection