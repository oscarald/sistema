@extends('adminlte::page')

@section('title', 'SILA')

@section('content_header')
    <h1>Estado de los trámites</h1>
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
        <th scope="col">Tiempo Max.</th>
        <th scope="col">Asignado a:</th>
        <th scope="col">Estado</th>
    </tr>
    </thead>
    <tbody>
    <tr>

        @foreach ($tramites as $tramite)
        <tr>
            <th scope="row">{{$tramite->id}}</td>
            <td>{{$tramite->created_at}}</td>
            <td>{{$tramite->nombre}}</td>
            <td>{{$tramite->empresa}}</td>
            <td>{{$tramite->tipo}}</td>

            <td>
                @switch($tramite->tipo)
                @case('FNCA')
                    3 días hábiles
                    @break
                @case('PPM-PASA')
                    10 días hábiles
                    @break
                @case('EEIA-AE')
                    15 días hábiles
                    @break
                @case('EEIA-AI')
                    15 días hábiles
                    @break
                @case('Manifiesto Ambiental')
                    15 días hábiles
                    @break
                @case('Renovacion')
                    15 días hábiles
                    @break
                @case('ITE')
                    5 días hábiles
                    @break
            
                @default
                    
            @endswitch
            </td>
            <td>
                @if (isset($tramite->user->name))
                    {{$tramite->user->name}}
                @else
                    -
                @endif
                
            </td>
            <td>
                @switch($tramite->estado)
                @case(1)
                    Para Asignar Técnico OSC
                    @break
                @case(2)
                    En revisíon por Técnico OSC
                    @break
                @case(3)
                    Trámite con observación OSC
                    @break
                @case(4)
                    Trámite enviado AACN
                    @break
                @case(5)
                    Para Asignar Técnico AACN
                    @break
                @case(6)
                    En revisíon por Técnico AACN
                    @break
                @case(7)
                    Trámite con observación AACN
                    @break
                @case(8)
                    Trámite Finalizado
                    @break
                @case(9)
                    Trámite Rechazado
                    @break
            
                @default
                    
            @endswitch
            </td>
            
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