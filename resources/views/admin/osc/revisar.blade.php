@extends('adminlte::page')

@section('title', 'SILA')

@section('content_header')
    <h1>Asignacion de Tramites</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif

<table class="table">
    <thead>
    <tr>
        <th scope="col"># de tramite</th>
        <th scope="col">Fecha de ingreso</th>
        <th scope="col">Nombre AOP</th>
        <th scope="col">Nombre Empresa</th>
        <th scope="col">Tipo de Tramite</th>
        <th scope="col">Descargar Informacion</th>
        <th scope="col">Finalizar revisión</th>
    </tr>
    </thead>
    <tbody>
        
        @foreach ($tramites as $tramite)
            <tr>
                <th scope="row">{{$tramite->id}}</th>
                <td>{{$tramite->created_at}}</td>
                <td>
                    {{$tramite->nombre}}
                    @if ($tramite->ctrobs == 1)
                    <span class="badge bg-warning text-dark">Corregido</span>
                    @endif
                </td>
                <td>{{$tramite->empresa}}</td>
                <td>{{$tramite->tipo}}</td>
                <td><a href="download/{{$tramite->id}}">Descargar</a></td>
                <td><a href="finalizar/{{$tramite->id}}">Finalizar</a></td>
            </tr>    
        @endforeach
        
    </tbody>
</table>
@stop

