@extends ('layouts.app')

@section('content')
<h1>Editar Heroe - {{ $enemy->name }}</h1>

<form action="{{ route('enemy.update', ['id' => $enemy->id]) }}" method="POST" enctype="multipart/form-data">
   @method('PUT')
   @include('admin.enemies.form')
   <button type="submit" class="btn btn-warning text-white">Editar</button>
</form>

@endsection