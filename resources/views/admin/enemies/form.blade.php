  @csrf
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" @isset($enemy) value="{{ $enemy->name }}" @endisset placeholder="Ingrese un nombre" require>
  </div>

  <div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" @isset($enemy) value="{{ $enemy->hp }}" @endisset placeholder="Ingrese los puntos de vida" require>
  </div>

  <div class="form-group">
    <label for="attack">Ataque</label>
    <input type="number" class="form-control" id="attack" name="attack" @isset($enemy) value="{{ $enemy->attack }}" @endisset placeholder="Ingrese los puntos de ataque" require>
  </div>

  <div class="form-group">
    <label for="defense">Defensa</label>
    <input type="number" class="form-control" id="defense" name="defense" @isset($enemy) value="{{ $enemy->defense }}" @endisset placeholder="Ingrese los puntos de defensa" require>
  </div>

  
  <div class="form-group">
      <label for="coins">Monedas</label>
      <input type="number" class="form-control" id="coins" name="coins" @isset($enemy) value="{{ $enemy->coins }}" @endisset placeholder="Ingrese la cantidad de monedas" require>
  </div>
  
  <div class="form-group">
    <label for="experience">Experiencia</label>
    <input type="number" class="form-control" id="experience" name="experience" @isset($enemy) value="{{ $enemy->experience }}" @endisset placeholder="Ingrese los puntos de suerte" require>
  </div>