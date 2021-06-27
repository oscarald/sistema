@extends('adminlte::page')

@section('title', 'SLI')

@section('content_header')
    <h1>Crear nuevo revisor</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.users.store']) !!}
            <div class="row mb-3">
                {!! Form::label('name', 'Nombre', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                {!! Form::label('email', 'E-mail', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                {!! Form::label('password', 'Password', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('password', null, ['class' => 'form-control']) !!}
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                {!! Form::label('unidad', 'Unidad', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                {!! Form::select('unidad', ['Ministerio de Hidrocarburos' => 'Ministerio de Hidrocarburos', 'Ministerio de Medio Ambiente y Aguas' => 'Ministerio de Medio Ambiente y Aguas'], null, ['class' => 'col-sm-10 form-select']) !!}
                    @error('unidad')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

            </div>
            <div class="row mb-3">
                {!! Form::label('telefono', 'Teléfono', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                    @error('telefono')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                {!! Form::label('rol', 'Rol', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                {!! Form::select('rol', $roles, null, ['class' => 'col-sm-10 form-select']) !!}
                    @error('rol')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
            </div>
            {!! Form::submit('Crear nuevo Usuario', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop