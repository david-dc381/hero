@extends ('layouts.app')

@section('content')
<h1>Editar Item - {{ $item->name }}</h1>

<form action="{{ route('item.update', ['id' => $item->id]) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" placeholder="Ingrese un nombre" require>
  </div>

  <div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" value="{{ $item->hp }}" placeholder="Ingrese los puntos de vida" require>
  </div>

  <div class="form-group">
    <label for="attack">Ataque</label>
    <input type="number" class="form-control" id="attack" name="attack" value="{{ $item->attack }}" placeholder="Ingrese los puntos de ataque" require>
  </div>

  <div class="form-group">
    <label for="defense">Defensa</label>
    <input type="number" class="form-control" id="defense" name="defense" value="{{ $item->defense }}" placeholder="Ingrese los puntos de defensa" require>
  </div>

  <div class="form-group">
    <label for="luck">Suerte</label>
    <input type="number" class="form-control" id="luck" name="luck" value="{{ $item->luck }}" placeholder="Ingrese los puntos de suerte" require>
  </div>

  <div class="form-group">
    <label for="cost">Precio</label>
    <input type="number" class="form-control" id="cost" name="cost" value="{{ $item->cost }}" placeholder="Ingrese la cantidad de monedas" require>
  </div>

  <button type="submit" class="btn btn-warning text-white">Editar</button>
</form>

@endsection