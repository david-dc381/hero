@extends ('layouts.app')

@section('content')
<h1>Editar Heroe - {{ $hero->name }}</h1>

<form action="{{ route('heroes.update', ['id' => $hero->id]) }}" method="POST">
  @method('PUT')
  @include('admin.heroes.form')
  <button type="submit" class="btn btn-warning text-white">Editar</button>
</form>

@endsection