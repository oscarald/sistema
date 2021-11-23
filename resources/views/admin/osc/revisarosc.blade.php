@extends('adminlte::page')

@section('title', 'SILA')

@section('content_header')
    <h1>Revisar trámites terminados por el revisor</h1>
@stop

@section('content')

<table class="table">
    <thead>
    <tr>
        <th scope="col"># de tramite</th>
        <th scope="col">Fecha de ingreso</th>
        <th scope="col">Nombre AOP</th>
        <th scope="col">Nombre Empresa</th>
        <th scope="col">Tipo de Tramite</th>
        <th scope="col">Descargar Trámite</th>
        <th scope="col">Descargar Resolución</th>
        <th scope="col">Finalizar revisión</th>
    </tr>
    </thead>
    <tbody>
        
        @foreach ($tramites as $tramite)
            <tr>
                <th scope="row">{{$tramite->id}}</th>
                <td>{{$tramite->created_at}}</td>
                <td>{{$tramite->nombre}}</td>
                <td>{{$tramite->empresa}}</td>
                <td>{{$tramite->tipo}}</td>
                <td><a href="download/{{$tramite->id}}">Descargar</a></td>
                <td><a href="download1/{{$tramite->id}}">Descargar</a></td>
                <td><a href="concluir/{{$tramite->id}}">Finalizar</a></td>
            </tr>    
        @endforeach
        
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop