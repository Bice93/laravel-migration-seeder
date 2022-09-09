@extends('layouts.main')

@section('main-content')
<h3>Lista treni:</h3>

    @forelse ($trains as $train )
    <ul>
        <li>Nome Compagnia: {{ $train->name_company }}</li>
        <li>Code: {{ $train->train_code }}</li>
        <li>Carriage: {{ $train->number_carriages }}</li>
        <li>From: {{ $train->departure_station }}</li>
        <li>To: {{ $train->arrival_station }}</li>
        <li>Departure Date: {{ $train->departure_time }}</li>
        <li>Arrival Date. {{ $train->arrival_time }}</li>

    </ul>
    @empty
        
    @endforelse

@endsection