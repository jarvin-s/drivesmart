@extends('layouts.app')

@section('content')
    <div class="contact-container">
        <div class="contact-box">
            <div class="left">
                <h1>Contact</h1>
                <p>Wil je je aanmelden of heb je behoefte aan meer informatie? Neem dan gerust contact op!</p>
                <hr>
                <input type="text" class="form-control mb-4" name="naam" placeholder="Uw naam">
                <input type="text" class="form-control mb-4" name="email" placeholder="Uw e-mailadres">
                <input type="text" class="form-control mb-4" name="telefoon" placeholder="Telefoonnummer">
                <textarea placeholder="Bericht" class="field"></textarea>
                <button class="btn btn-primary col-lg-12">Versturen</button>
            </div>
            <div class="right"></div>

        </div>
    </div>
@endsection
