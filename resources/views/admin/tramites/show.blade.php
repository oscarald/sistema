@extends('adminlte::page')

@section('title', 'SILA')

@section('content_header')
    <h1>Mostrar tramite</h1>
@stop

@section('content')
<p>hi</p>
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.revisor.create']) !!}
            <div class="row mb-3">
                {!! Form::label('renca', 'Renca(*)', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('renca', null, ['class' => 'form-control']) !!}
                    @error('renca')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                {!! Form::label('ci', 'CI', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('ci', null, ['class' => 'form-control']) !!}
                    @error('ci')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                {!! Form::label('domicilio', 'Domicilio', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('domicilio', null, ['class' => 'form-control']) !!}
                    @error('domicilio')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                {!! Form::label('ciudad', 'Ciudad', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
                    @error('ciudad')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                {!! Form::label('departamento', 'Departamento', ['class' => 'mb-3 col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
                    @error('departamento')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
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
        
            {!! Form::submit('Enviar Trámite', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    
</div>
@stop

