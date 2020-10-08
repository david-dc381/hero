@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Lista de Heroes</h1>
    </div>

    <div class="row">
        <a class="btn btn-primary mt-3 mb-3" href="{{ route('admin.heroes.create') }}">Crear nuevo heroe</a>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">HP</th>
                    <th scope="col">Ataque</th>
                    <th scope="col">Defensa</th>
                    <th scope="col">Suerte</th>
                    <th scope="col">Monedas</th>
                    <th scope="col">Experiencia</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($heroes as $hero)
                    <tr>
                        <th scope="row">{{ $hero -> id }}</th>
                        <td>{{ $hero -> name }}</td>
                        <td>{{ $hero -> hp }}</td>
                        <td>{{ $hero -> attack }}</td>
                        <td>{{ $hero -> defense }}</td>
                        <td>{{ $hero -> luck }}</td>
                        <td>{{ $hero -> coins }}</td>
                        <td>{{ $hero -> experience }}</td>
                        <td>
                            <a href="{{ route('admin.heroes.edit', ['id' => $hero->id]) }}" class="btn btn-warning text-white">Modificar</a>
                            <a href="{{ route('admin.heroes') }}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection