@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- Players Section -->
        <h2 class="text-center mt-4">Dreadnots Players</h2>
        <table class="table table-striped table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Goals</th>
                    <th>Points</th>
                    <th>Turnovers</th>
                    <th>Possession</th>
                    <th>Kickouts Won</th>
                    <th>Kickouts Lost</th>
                    <th>Possession Lost</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($players as $player)
                    <tr>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->age }}</td>
                        <td>{{ $player->goals }}</td>
                        <td>{{ $player->points }}</td>
                        <td>{{ $player->turnovers }}</td>
                        <td>{{ $player->possession }}</td>
                        <td>{{ $player->kickouts_won }}</td>
                        <td>{{ $player->kickouts_lost }}</td>
                        <td>{{ $player->possession_lost }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Posts Section -->
        <h2 class="text-center mt-5">Latest Blog Posts</h2>
        <div class="row mt-4">
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection