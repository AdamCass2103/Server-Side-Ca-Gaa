@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">About Dreadnots GAA Blog</h1>
    <p class="lead">Welcome to the official Dreadnots GAA Blog!</p>

    <p>This site provides updates on our team, player statistics, and match reports. We are proud to represent the Dreadnots and aim to keep our community informed and engaged.</p>

    <h3>About the Club</h3>
    <p>The Dreadnots GAA club has a proud tradition of Gaelic football success, winning the Junior Championship and competing at high levels in County Louth.</p>

    <h3>Meet the Players</h3>
    <p>Check out the <a href="{{ route('home') }}">Players Page</a> to view player stats and profiles.</p>

    <h3>Contact Us</h3>
    <p>Feel free to <a href="{{ route('contact') }}">Contact Us</a> for any inquiries or support!</p>
</div>
@endsection