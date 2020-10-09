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
                        <div class="row">
                                <div class="col-4">
                                    <a href="{{ route('admin.heroes.edit', ['id' => $hero->id]) }}" class="btn btn-warning text-white">Modificar</a>
                                </div>
                                <div class="col-4">
                                    <form action="{{ route('admin.heroes.destroy', ['id' => $hero->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <!-- <button type="submit" class="btn btn-danger">Eliminar</button> -->

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Eliminar</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Eliminar Heroe</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Está seguro de eliminar el héroe?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-primary">Eliminar</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection