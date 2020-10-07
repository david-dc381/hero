@extends('layouts.app')

@section('content')
    <h1>Lista de Heroes</h1>

    
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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection