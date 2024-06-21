@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Usuarios Registrados</h2>
        </div>
        <div>
            <a href="{{route('users.create')}}" class="btn btn-primary">Registrar Usuario</a>
        </div>
    </div>
    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{Session::get('success')}}</strong><br><br>
        </div>
    @endif
    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Creado</th>
                <th>Rol</th>
                <th>Acción</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td class="fw-bold">{{$user->employees->name_ets}} {{$user->employees->lastname_ets}}</td>
                <td>{{$user->username_uts}}</td>
                <td>
                    31/03/23
                </td>
                <td>
                    <span class="badge bg-warning fs-6">{{$user->roles->name_rts}}</span>
                </td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>

                    <form action="" method="post" class="d-inline">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection