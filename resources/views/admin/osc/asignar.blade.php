@extends('adminlte::page')

@section('title', 'SILA')

@section('content_header')
    <h1>Asignacion de trámites a los revisores</h1>
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
                <th scope="col">Asignar</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr>

                @foreach ($tramites as $tramite)
                <tr>
                    <th scope="row">{{$tramite->id}}</td>
                    <td>{{$tramite->created_at}}</td>
                    <td>
                        {{$tramite->nombre}} 
                        @if ($tramite->ctrobs == 1)
                            <span class="badge bg-warning text-dark">Corregido</span>
                        @endif
                    </td>
                    <td>{{$tramite->empresa}}</td>
                    <td>{{$tramite->tipo}}</td>
                    {!! Form::open(['route' => 'admin.osc.aceptar']) !!}
                    {!! Form::hidden('tramite_id', $tramite->id) !!}
                    <td> {!! Form::select('user', $users, null, ['class' => 'col-sm-10 form-select']) !!}</td>
                    <td>{!! Form::submit('Asignar', ['class' => 'btn btn-primary']) !!}</td>
                    {!! Form::close() !!}
                </tr>
                
            @endforeach


            </tbody>
    </table>
@stop

