@csrf
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" @isset($item) value="{{ $item->name }}" @endisset placeholder="Ingrese un nombre" require>
</div>

<div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" @isset($item) value="{{ $item->hp }}" @endisset placeholder="Ingrese los puntos de vida" require>
</div>

<div class="form-group">
    <label for="attack">Ataque</label>
    <input type="number" class="form-control" id="attack" name="attack" @isset($item) value="{{ $item->attack }}" @endisset placeholder="Ingrese los puntos de ataque" require>
</div>

<div class="form-group">
    <label for="defense">Defensa</label>
    <input type="number" class="form-control" id="defense" name="defense" @isset($item) value="{{ $item->defense }}" @endisset placeholder="Ingrese los puntos de defensa" require>
</div>

<div class="form-group">
    <label for="luck">Suerte</label>
    <input type="number" class="form-control" id="luck" name="luck" @isset($item) value="{{ $item->luck }}" @endisset placeholder="Ingrese los puntos de suerte" require>
</div>

<div class="form-group">
    <label for="cost">Precio</label>
    <input type="number" class="form-control" id="cost" name="cost" @isset($item) value="{{ $item->cost }}" @endisset placeholder="Ingrese la cantidad de monedas" require>
</div>
