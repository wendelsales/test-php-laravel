@extends('layout.template')

@section('content')
<nav>Bem vindo: {{ Auth::user()->email }}</nav>
@stop
