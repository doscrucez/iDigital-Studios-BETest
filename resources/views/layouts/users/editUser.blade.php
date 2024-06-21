@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Crear Tarea</h2>
        </div>
        <div>
            <a href="{{route('users.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-2">
            <strong>Error</strong><br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('users.store')}}" method="POST">
    @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nombre de Usuario:</strong>
                    <input type="text" name="username_uts" class="form-control" placeholder="Nombre de Usuario" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Contraseña:</strong>
                    <input type="text" name="password_uts" class="form-control" placeholder="Contraseña" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Confirmar contraseña:</strong>
                    <input type="text" name="confirm_password_uts" class="form-control" placeholder="Confirmar contraseña" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Fecha límite:</strong>
                    <input type="date" name="due_date" class="form-control" id="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                <strong>Empleado:</strong>
                    <select name="id_ets" class="form-select" id="">
                        <option value="">-- Elige un empleado --</option>
                        @foreach($employees as $employee)
                            <option name = "{{$employee->id}}"value="{{$employee->id}}">{{$employee->name_ets}} {{$employee->lastname_ets}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                <strong>Rol:</strong>
                    <select name="id_rts" class="form-select" id="">
                        <option value="">-- Elige el status --</option>
                        @foreach($roles as $rol)
                            <option name="{{$rol->id}}" value="{{$rol->id}}">{{$rol->name_rts}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection