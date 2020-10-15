  @csrf
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" @isset($hero) value="{{ $hero->name }}" @endisset placeholder="Ingrese un nombre" require>
  </div>

  <div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" @isset($hero) value="{{ $hero->hp }}" @endisset placeholder="Ingrese los puntos de vida" require>
  </div>

  <div class="form-group">
    <label for="attack">Ataque</label>
    <input type="number" class="form-control" id="attack" name="attack" @isset($hero) value="{{ $hero->attack }}" @endisset placeholder="Ingrese los puntos de ataque" require>
  </div>

  <div class="form-group">
    <label for="defense">Defensa</label>
    <input type="number" class="form-control" id="defense" name="defense" @isset($hero) value="{{ $hero->defense }}" @endisset placeholder="Ingrese los puntos de defensa" require>
  </div>

  <div class="form-group">
    <label for="luck">Suerte</label>
    <input type="number" class="form-control" id="luck" name="luck" @isset($hero) value="{{ $hero->luck }}" @endisset placeholder="Ingrese los puntos de suerte" require>
  </div>

  <div class="form-group">
    <label for="coins">Monedas</label>
    <input type="number" class="form-control" id="coins" name="coins" @isset($hero) value="{{ $hero->coins }}" @endisset placeholder="Ingrese la cantidad de monedas" require>
  </div>

  <div class="from-group">
    <label for="img_path">Imagen</label>
    <input type="file" name="img_path" id="img_path">
  </div>
