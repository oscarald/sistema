@extends('adminlte::page')

@section('title', 'SILA')

@section('content_header')
    <h1>Corregir observaciones</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($tramite, ['route' => ['admin.tramites.update', $tramite], 'files' => true, 'method' => 'put']) !!}
        <h3 class="mb-3">Representante Legal</h3>
            <div class="row mb-3">
                {!! Form::label('representante', 'Nombre Representante Legal(*)', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('representante', null, ['class' => 'form-control']) !!}
                    @error('representante')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                {!! Form::label('testimonio', 'Tipo de Testimonio (Nro)(*)', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('testimonio', null, ['class' => 'form-control']) !!}
                    @error('testimonio')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                {!! Form::label('nombre', 'Nombre AOP(*)', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                {!! Form::label('empresa', 'Empresa', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('empresa', null, ['class' => 'form-control']) !!}
                    @error('empresa')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        <h3>Seleccione el tipo de IRAP</h3>
            <div class="row mb-3">
                {!! Form::label('tipo', 'Tipo', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                {!! Form::select('tipo', ['FNCA' => 'FNCA','PPM-PASA' => 'PPM-PASA','EEIA-AE' => 'EEIA-AE','EEIA-AI' => 'EEIA-AI','Manifiesto Ambiental' => 'Manifiesto Ambiental','Renovacion' => 'Renovacion','ITE' => 'ITE'], null, ['class' => 'col-sm-10 form-select']) !!}
            </div>
        <h3>Documentación</h3>
            <div class="row mb-3">
                {!! Form::label('documento', 'Documentación (Solo PDF-Max. 200MB)', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                {!! Form::file('documento', ['class' => 'form-control col-sm-10', 'accept' => 'application/pdf']) !!}
                @error('documento')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            {!! Form::submit('Enviar Trámite', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

