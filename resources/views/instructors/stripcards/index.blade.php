@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10">
                <div class="bg-white mt-5 p-3">
                    <h2 class="fw-bold mb-4">Strippenkaarten overzicht</h2>
                    <a class="btn btn-primary btn-lg" href="{{ route('stripcards.create') }}">Strippenkaart koppelen</a>
                    <table id="stripcards-table" class="table table-striped table-bordered table-responsive mt-2">
                        <thead>
                            <tr>
                                <th class="col-2">Leerling</th>
                                <th class="col-2">Totaal aantal lessen</th>
                                <th class="col-2">Resterende lessen</th>
                                <th class="col-2">Datum</th>
                                <th class="col-2">Tijdblok</th>
                                <th class="col-2">Wijzig</th>
                                <th class="col-2">Verwijder</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stripcards as $stripcard)
                                <tr>
                                    <td>{{ $stripcard->student->voornaam }}</td>
                                    <td>{{ $stripcard->aantal_lessen }}</td>
                                    <td>{{ $stripcard->resterende_lessen }}</td>

                                    <td><a class="edit-btn btn btn-sm" href="">Wijzig</a>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" type="submit" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal" onclick="">Verwijder</button>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $('#stripcards-table').DataTable({
                // Set language to Dutch
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Dutch.json"
                },
                responsive: true
            });
        </script>
    @endsection
