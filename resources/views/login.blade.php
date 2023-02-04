@extends('layout.template')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('user.login') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <label for="email">Email:</label>
        <input id="email" type="email" name="email">
        <label for="password">Senha:</label>
        <input id="password" type="password" name="password">

        <input type="submit" value="Fazer login">
    </form>
@stop

