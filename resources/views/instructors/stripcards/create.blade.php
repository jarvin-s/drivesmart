@extends('layouts.app')

@section('content')
    <div class="container col-md-4 mt-5">
        <h2 class="mb-3 ml-3">Strippenkaarten koppelen</h2>
        <form class="stripcard p-4" action="{{ route('stripcards.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="name" class="form-label ">Leerling</label>
                    <div class="input-group">
                        <select name="student_id" class="form-control" id="type">
                            @foreach ($students as $student)
                                <option value="{{ $student->id }}">
                                    {{ $student->voornaam }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="amount_of_lessons" class="form-label ">Aantal lessen</label>
                    <div class="input-group">
                        <input name="aantal_lessen" type="text" class="form-control input-effect" id="amount_of_lessons"
                            oninvalid="" required>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="remaining_lessons" class="form-label ">Resterende lessen</label>
                    <div class="input-group">
                        <input name="resterende_lessen" type="text" class="form-control input-effect"
                            id="remaining_lessons">
                    </div>
                </div>

                <div class="col">
                    <button class="btn btn-primary mt-2 col-12" type="submit">Koppel</button>
                </div>
            </div>
        </form>
    </div>
@endsection
