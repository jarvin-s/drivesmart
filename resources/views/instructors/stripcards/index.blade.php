@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10">
                <div class="bg-white mt-5 p-3">
                    <h2 class="fw-bold mb-4">Strippenkaarten overzicht</h2>
                    <a class="btn btn-primary btn-lg mb-4" href="{{ route('stripcards.create') }}">Strippenkaart koppelen</a>
                    <table id="stripcards-table" class="table table-striped table-bordered table-responsive mt-2">
                        <thead>
                            <tr>
                                <th class="col-6">Leerling</th>
                                <th class="col">Totaal aantal lessen</th>
                                <th class="col">Resterende lessen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stripcards as $stripcard)
                                <tr>
                                    <td>{{ $stripcard->student->voornaam }}</td>
                                    <td>{{ $stripcard->aantal_lessen }}</td>
                                    <td>{{ $stripcard->resterende_lessen }}</td>
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
