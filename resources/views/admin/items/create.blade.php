@extends ('layouts.app')

@section('content')
<h1>Crear Nuevo Item</h1>

<form action="{{ route('item.store') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese un nombre" require>
  </div>

  <div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" placeholder="Ingrese los puntos de vida" require>
  </div>

  <div class="form-group">
    <label for="attack">Ataque</label>
    <input type="number" class="form-control" id="attack" name="attack" placeholder="Ingrese los puntos de ataque" require>
  </div>

  <div class="form-group">
    <label for="defense">Defensa</label>
    <input type="number" class="form-control" id="defense" name="defense" placeholder="Ingrese los puntos de defensa" require>
  </div>

  <div class="form-group">
    <label for="luck">Suerte</label>
    <input type="number" class="form-control" id="luck" name="luck" placeholder="Ingrese los puntos de suerte" require>
  </div>

  <div class="form-group">
    <label for="cost">Precio</label>
    <input type="number" class="form-control" id="cost" name="cost" placeholder="Ingrese el precio" require>
  </div>

  <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection