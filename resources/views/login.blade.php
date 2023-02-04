<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Login</title>
</head>
<body>

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
</body>
</html>