@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10">
                <div class="bg-white mt-5 p-3">
                    <h2 class="fw-bold mb-4">Ingeplande lessen</h2>
                    <table id="lessonblock-table" class="table table-striped table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th class="col-2">Instructeur</th>
                                <th class="col-2">Auto</th>
                                <th class="col-2">Datum</th>
                                <th class="col-2">Tijdblok</th>
                                <th class="col-2">Leerling</th>
                                <th class="col-2">Inzien</th>
                                <th class="col-2">Beëindig</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lessonblocks as $lessonblock)
                                <tr>
                                    <td>{{ $lessonblock->instructor->voornaam }}</td>
                                    <td>{{ $lessonblock->auto_kenteken }}</td>
                                    <td>{{ \Carbon\Carbon::parse($lessonblock->datum)->format('d-m-Y') }}</td>
                                    <td>{{ $lessonblock->tijdblok }}</td>
                                    <td>{{ $lessonblock->leerling_id }}</td>
                                    <td><a class="edit-btn btn btn-sm"
                                            href="{{ route('lessonblocks.edit', $lessonblock->id) }}">Inzien</a>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" type="submit">Beëindig</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $('#lessonblocks-table').DataTable({
                // Set language to Dutch
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Dutch.json"
                },
                responsive: true
            });
        </script>
    @endsection
