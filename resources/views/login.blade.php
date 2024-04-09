{{-- @extends('layouts.app')

@section('content')
    <h1>Login</h1>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DriveSmart - Inloggen</title>

    {{-- favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body class="text-center">
    {{-- 
    <form class="form-signin" method="POST" action="{{ route('checkLogin') }}" data-handle-errors>
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
    </form> --}}
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-6 d-none d-md-flex bg-image"></div>
            <div class="col-md-6 bg-dark">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="login-card col-lg-10 col-xl-7 mx-auto">
                                <form class="form-signin" method="POST" action="{{ route('checkLogin') }}"
                                    data-handle-errors>
                                    @csrf
                                    <h1 class="h3 mb-3">Welkom bij Rijschool <span class="brand-text">
                                            <span class="text-white">Drive</span><span
                                                class="smart-text">Smart</span>!</span></h1>
                                    <label for="inputEmail">E-mailadres</label>
                                    <input type="email" id="inputEmail" name="email" class="form-control mb-2"
                                        placeholder="E-mailadres" data-error-message="Vul een geldig e-mailadres in"
                                        required autofocus>
                                    <label for="inputPassword">Wachtwoord</label>
                                    <input type="password" id="inputPassword" name="wachtwoord"
                                        class="form-control mb-2" placeholder="Wachtwoord"
                                        data-error-message="Vul een geldig wachtwoord in" required>
                                    <button class="btn btn-primary mt-2 col-12" type="submit">Inloggen</button>
                                    <div class="mt-3 mb-5">
                                        @if ($errors->any())
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('error') }}
                                            </div>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
