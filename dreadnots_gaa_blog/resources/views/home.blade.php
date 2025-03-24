@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to the Dreadnots GAA Blog!</h1>

        <!-- Players Table -->
        <h2>Our Players</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Position</th>
                    <th>Points Scored</th>
                    <th>Matches Played</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($players as $player)
                    <tr>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->age }}</td>
                        <td>{{ $player->position }}</td>
                        <td>{{ $player->points_scored }}</td>
                        <td>{{ $player->matches_played }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Blog Posts Section -->
        <h2>Latest Blog Posts</h2>
        @foreach($posts as $post)
            <div class="post">
                <h3>{{ $post->title }}</h3>
                <p>{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ route('posts.show', $post->id) }}">Read More</a>
            </div>
        @endforeach

        <!-- If no posts, display this message -->
        @if($posts->isEmpty())
            <p>No blog posts found.</p>
        @endif
    </div>
@endsection