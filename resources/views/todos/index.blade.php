@extends('layouts.app')

@section('content')

<div class="container">
    <div class="p-12">
        <h1 class="text-3xl">
            Lista de tareas
        </h1>
        <a href="/todos/create" class="btn btn-primary float-right">
            Nueva tarea
        </a>
    </div>
    <div class="p-14 w-full">
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <th>#</th>
                <th>Tarea</th>
                <th>Descripción</th>
                <th>Terminada</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($todos as $todo )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$todo->title}}</td>
                    <td>{{$todo->description}}</td>
                    <td>{{$todo->finished ? 'Si' : 'No'}}</td>
                    <td>
                        <a href="{{$todo->id}}" class="btn btn-primary">Ver</a>
                        <a href="{{$todo->id}}/edit/" class="btn btn-primary">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
