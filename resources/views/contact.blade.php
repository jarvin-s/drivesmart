@extends('layouts.app')

@section('content')
    <div class="contact-container">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <h1>Contact</h1>
                <h5>Wil je je <span class="fw-bold" style="color: blue; font-size: 15px;">aanmelden</span> of heb je behoefte
                    aan <span class="fw-bold" style="color: blue; font-size: 15px;">meer informatie</span>? Neem dan gerust
                    contact op!</h5>
                <p>Vul het formulier hieronder in of stuur ons een <span class="fw-bold" style="color: blue;">e-mail</span>
                    via <span class="fw-bold"><a href="mailto:support@drivesmart.nl">support@drivesmart.nl</a>.</span></p>
                <hr>
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <input type="text" class="form-control mb-4" name="naam" placeholder="Uw naam*" required>
                    <input type="email" class="form-control mb-4" name="email" placeholder="Uw e-mailadres*" required>
                    <input type="text" class="form-control mb-4" name="telefoon" pattern="^[0-9]{10}$"
                        placeholder="Telefoonnummer">
                    <textarea placeholder="Bericht" name="bericht" class="field"></textarea>
                    <button class="btn btn-primary col-lg-12" type="submit">Versturen</button>
                    @if (session('message'))
                        <div class="alert alert-success mt-2">{{ session('message') }}</div>
                    @endif
            </div>
            </form>
        </div>
    </div>
@endsection
