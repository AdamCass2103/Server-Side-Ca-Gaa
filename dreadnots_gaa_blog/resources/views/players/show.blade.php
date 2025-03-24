@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dreadnots GAA Player Profiles</h1>

    <img src="{{ asset('images/dreadnots-badge.png') }}" alt="Dreadnots Badge" width="150">


    <h1>{{ $player->name }}'s Stats</h1>
    <ul>
        <li>Age: {{ $player->age }}</li>
        <li>Position: {{ $player->position }}</li>
        <li>Goals: {{ $player->goals }}</li>
        <li>Points: {{ $player->points }}</li>
        <li>Turnovers: {{ $player->turnovers }}</li>
        <li>Possession Won: {{ $player->possession_won }}</li>
        <li>Possession Lost: {{ $player->possession_lost }}</li>
        <li>Kickouts Won: {{ $player->kickouts_won }}</li>
        <li>Kickouts Lost: {{ $player->kickouts_lost }}</li>
    </ul>
@endsection