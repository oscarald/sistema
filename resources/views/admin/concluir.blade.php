@extends('adminlte::page')

@section('title', 'SILA')

@section('content_header')
    <h1>Resolucion de Tramites</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
    
     <form>
        <h2 class="mb-3">Excavacion de YPFB</h2>
            <div class="row mb-3">
                <label for="" class="mb-3 col-sm-2 col-form-label">Numero de Tramite</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="">
                </div>
                
            </div>

        <div class="row mb-3">
            <label for="" class="mb-3 col-sm-2 col-form-label">Resolucion</label>
            <input type="file" class="form-control col-sm-10" id="">
        </div>


            <button type="submit" class="btn btn-primary">Enviar Resolucion</button>
        </form>
    </div>
    </div>

@stop