@extends('layouts.main-layout')
@section('head-title')
    <title>Homepage</title>
@endsection

@section('content')

    <h2>TRAINS:</h2>
    <table class="table-container">
        <thead>
            <tr>
                <th>N. Treno</th>
                <th>Partenza</th>
                <th>Arrivo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td><strong>{{ $train->code }}</strong></td>
                    <td>{{ $train->start_time }}</td>
                    <td>{{ $train->end_time }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
