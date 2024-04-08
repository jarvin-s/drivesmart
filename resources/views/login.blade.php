{{-- @extends('layouts.app')

@section('content')
    <h1>Login</h1>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inloggen</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" />

    <link href="{{ asset('public_sales/css/login.css') }}" rel="stylesheet">
</head>

<body class="text-center">

    <form class="form-signin" method="POST" action="{{ url('/api/login') }}" data-handle-errors>
        @csrf
        <h1 class="h3 mb-3">Inloggen</h1>
        <label for="inputEmail">E-mailadres</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="E-mailadres"
            data-error-message="Vul een geldig e-mailadres in" required autofocus>
        <label for="inputPassword">Wachtwoord</label>
        <input type="password" id="inputPassword" name="wachtwoord" class="form-control" placeholder="Wachtwoord"
            data-error-message="Vul een geldig wachtwoord in" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Inloggen</button>
        <div class="mt-3 mb-5">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('error') }}
                </div>
            @endif
        </div>
        <p class="mt-5 mb-3 text-muted invisible">.</p>
    </form>
</body>

</html>
