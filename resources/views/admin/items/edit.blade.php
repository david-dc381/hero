@extends ('layouts.app')

@section('content')
<h1>Editar Item - {{ $item->name }}</h1>

<form action="{{ route('item.update', ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @include('admin.items.form')
  <button type="submit" class="btn btn-warning text-white">Editar</button>
</form>

@endsection