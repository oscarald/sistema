@extends('adminlte::page')

@section('title', 'SILA')

@section('content_header')
    <h1>Tus trámites iniciados</h1>
@stop

@section('content')
    @livewire('admin.tramite-index')
@stop

