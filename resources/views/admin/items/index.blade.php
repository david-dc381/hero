@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Lista de Items</h1>
    </div>

    <div class="row">
        <a class="btn btn-primary mt-3 mb-3" href="{{ route('item.create') }}">Crear nuevo item</a>
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
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <th scope="row">{{ $item -> id }}</th>
                        <td>{{ $item -> name }}</td>
                        <td>{{ $item -> hp }}</td>
                        <td>{{ $item -> attack }}</td>
                        <td>{{ $item -> defense }}</td>
                        <td>{{ $item -> luck }}</td>
                        <td>{{ $item -> cost }}</td>
                        <td>
                        <div class="row">
                                <div class="col-4">
                                    <a href="{{ route('item.edit', ['id' => $item->id]) }}" class="btn btn-warning text-white">Modificar</a>
                                </div>
                                <div class="col-4">
                                    <form action="{{ route('item.destroy', ['id' => $item->id]) }}" method="POST">
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
                                                        <h5 class="modal-title" id="deleteModalLabel">Eliminar Item</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Está seguro de eliminar el item?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
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