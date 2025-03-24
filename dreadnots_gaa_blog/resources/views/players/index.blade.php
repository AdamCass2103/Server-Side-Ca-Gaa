<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>All Players</title>
</head>
<body>
    <h1>All Players</h1>
    <a href="{{ route('players.create') }}">Create New Player</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @extends('layouts.app')

@section('content')
    <h1>Dreadnots Players & Stats</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Position</th>
                <th>Goals</th>
                <th>Points</th>
                <th>Turnovers</th>
                <th>Possession Won</th>
                <th>Possession Lost</th>
                <th>Kickouts Won</th>
                <th>Kickouts Lost</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->age }}</td>
                    <td>{{ $player->position }}</td>
                    <td>{{ $player->goals }}</td>
                    <td>{{ $player->points }}</td>
                    <td>{{ $player->turnovers }}</td>
                    <td>{{ $player->possession_won }}</td>
                    <td>{{ $player->possession_lost }}</td>
                    <td>{{ $player->kickouts_won }}</td>
                    <td>{{ $player->kickouts_lost }}</td>
                    <td>
                        <a href="{{ route('players.show', $player->id) }}">View</a> |
                        <a href="{{ route('players.edit', $player->id) }}">Edit</a> |
                        <form action="{{ route('players.destroy', $player->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
        </tbody>
    </table>
</body>
</html>