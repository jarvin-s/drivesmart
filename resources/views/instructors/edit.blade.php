@extends('layouts.app')

@section('content')
    <div class="container col-md-4 mt-5">
        <h2 class="mb-3 ml-3">Lesblok inzien</h2>
        <form class="stripcard p-4" action="{{ route('lessonblocks.update', $lessonblock->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="instructor" class="form-label">Instructeur</label>
                    <div class="input-group">
                        <input name="instructeur_id" type="text" class="form-control" id="instructor"
                            value="{{ $lessonblock->instructor->voornaam }}" disabled>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="car" class="form-label">Auto</label>
                    <div class="input-group">
                        <input name="auto_id" type="text" class="form-control input-effect" id="car"
                            value="Merk: {{ $lessonblock->car->merk }} - Kenteken: {{ $lessonblock->car->kenteken }}" disabled>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="datum" class="form-label">Datum</label>
                    <div class="input-group">
                        <input name="datum" type="text" class="form-control input-effect" id="datum"
                            value="{{ $lessonblock->datum }}" disabled>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="timeblock" class="form-label">Tijdblok</label>
                    <div class="input-group">
                        <input name="tijdblok" type="text" class="form-control input-effect" id="timeblock"
                            value="{{ $lessonblock->tijdblok }}" disabled>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="student" class="form-label">Leerling</label>
                    <div class="input-group">
                        <input name="leerling_id" type="text" class="form-control input-effect" id="student"
                            value="{{ $lessonblock->student->voornaam }}" disabled>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="verslag" class="verslag-label form-label">Verslag/opmerkingen*</label>
                    <textarea name="verslag" class="form-control" placeholder="Schrijf hier uw verslag." required></textarea>
                </div>

                <div class="col">
                    <button class="btn btn-primary mt-2 col-12" oninvalid="this.setCustomValidity('Dit veld is verplicht.')" type="submit">Verslag opslaan</button>
                </div>

                <div class="col">
                    <button class="btn btn-danger mt-2 col-12" type="button">Beëindig</button>
                </div>
            </div>
        </form>
    </div>
@endsection
