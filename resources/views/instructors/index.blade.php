@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10">
                <div class="bg-white mt-5 p-3">
                    <h2 class="fw-bold mb-4">Ingeplande lessen</h2>
                    <table id="lessonblocks-table" class="table table-striped table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th class="col-2">Instructeur</th>
                                <th class="col-2">Auto</th>
                                <th class="col-2">Datum</th>
                                <th class="col-2">Tijdblok</th>
                                <th class="col-2">Leerling</th>
                                <th class="col-2">Verslag</th>
                                <th class="col-2">Status</th>
                                <th class="col-2">Inzien</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lessonblocks as $lessonblock)
                                @php
                                    // Check if lessonblock is active to display status correctly
                                    $badgeColour = $lessonblock->active == 1 ? 'success' : 'danger';
                                @endphp
                                <tr>
                                    <td>{{ $lessonblock->instructor->voornaam }}</td>
                                    <td>{{ $lessonblock->auto_kenteken }}</td>
                                    {{-- Change date formatting to date-month-Year --}}
                                    <td>{{ \Carbon\Carbon::parse($lessonblock->datum)->format('d-m-Y') }}</td>
                                    <td>{{ $lessonblock->tijdblok }}</td>
                                    <td>{{ $lessonblock->student->voornaam }}</td>
                                    <td>{{ $lessonblock->verslag }}</td>
                                    <td><span class="badge bg-{{ $badgeColour }}">
                                            {{ $lessonblock->active ? 'Ingepland' : 'Afgerond' }}
                                        </span>
                                    </td>
                                    <td><a class="edit-btn btn"
                                            href="{{ route('lessonblocks.edit', $lessonblock->id) }}">Inzien</a>
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
