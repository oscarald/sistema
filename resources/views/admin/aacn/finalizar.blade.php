@extends('adminlte::page')

@section('title', 'SLI')

@section('content_header')
    <h1>Finalizar Trámite </h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        <div class="h5">Nombre Consultor: {{$nombre->name}}</div>
        <div class="h5">Renca Consultor: {{$consultor->renca}}</div>
        <div class="h5">Telefono Consultor: {{$consultor->telefono}}</div>
        <div class="h5">Nombre Representante Legal: {{$tramite->representante}}</div>
        <div class="h5">Testimonio: {{$tramite->testimonio}}</div>
        <div class="h5">Nombre AOP: {{$tramite->nombre}}</div>
        <div class="h5">Nombre Empresa: {{$tramite->empresa}}</div>
        <div class="h5">Tipo de Trámite: {{$tramite->tipo}}</div>
    </div>  
</div>

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.aacn.store', 'files' => true]) !!}
        {!! Form::hidden('id', $tramite->id) !!}
        <div class="row mb-3">
            {!! Form::label('resolucion', 'Informe de Revisíon', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
            {!! Form::file('resolucion', ['class' => 'form-control col-sm-10', 'accept' => 'application/pdf']) !!}
            @error('resolucion')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="row mb-3">
            {!! Form::label('active', 'Documentación aceptada', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
            <label>
                {!! Form::radio('status', 2, true) !!}
                Aprobado
            </label>
            <label class="ml-4">
                {!! Form::radio('status', 1) !!}
                Con observación
            </label>
            <label class="ml-4">
                {!! Form::radio('status', 3) !!}
                Rechazado
            </label>
        </div>
        <div class="row mb-3"  >
            {!! Form::label('observacion', 'Documentación para Representante Legal', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
            {!! Form::file('observacion', ['class' => 'form-control col-sm-10', 'accept' => 'application/pdf']) !!}
            @error('observacion')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        {!! Form::submit('Enviar Resolución', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

    </div>  
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
