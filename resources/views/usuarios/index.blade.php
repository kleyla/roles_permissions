@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Lista usuarios</h1>
                </div>
                <div class="card-body">
                    <div class="row justify-content-end">
                        <a href="{{url('/usuarios/create')}}" class="btn btn-success">Nuevo</a>
                    </div>
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->roles->implode('name', ', ')}}</td>
                                <td><a href="{{url('/usuarios/'.$user->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                    <a href="" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
