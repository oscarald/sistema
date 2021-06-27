@extends('adminlte::page')

@section('title', 'SLI')

@section('content_header')

    <a href="{{route('admin.users.create')}}" class="btn btn-info float-right">Nuevo Revisor</a>
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
    @livewire('admin.users-index')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop