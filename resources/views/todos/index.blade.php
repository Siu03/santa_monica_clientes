@extends('layouts.app')

@section('content')

<div class="container">
    <div class="p-12 border-spacing-1">

        <a href="/todos/export" class="btn btn-success float-right">
            Exportar a Excel
        </a>
        <h1 class="text-3xl">
            Lista de clientes
        </h1>
    </div>
    <div class="p-14 w-full">
        <table class="table table-striped table-hover text-center">
            <thead class="table-primary">
                <th>#</th>
                <th>Nombre Completo</th>
                <th>Correo electrónico</th>
                <th>Número teléfonico</th>
                <th>Mensaje</th>
                <th>Hora</th>
                {{--<th>Acciones</th> --}}
            </thead>
            <tbody>
                @foreach ($todos as $todo )
                <tr class="text-center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$todo->name_client}}</td>
                    <td><a href="mailto:{{$todo->email_client}}">{{$todo->email_client}}</a></td>
                    <td><a href="tel:{{$todo->tel_client}}">{{$todo->tel_client}}</a></td>
                    <td>{{$todo->message_client}}</td>
                    <td>{{$todo->created_at}}</td>
                    {{-- <td class="p-10 text-center">
                        <a href="{{$todo->id}}" class="btn btn-primary">Ver</a>
                        <a href="{{$todo->id}}/edit/" class="btn btn-primary">Editar</a>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
