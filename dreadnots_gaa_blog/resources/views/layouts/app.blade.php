

<!DOCTYPE html>
<html>
<head>
    <title>Dreadnots GAA Blog</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="bg-blue-500 text-white p-4">
        <a href="{{ route('home') }}" class="mr-4">Home</a>
        <a href="{{ route('about') }}" class="mr-4">About</a>
        <a href="{{ route('contact') }}" class="mr-4">Contact</a>
        <a href="{{ route('players.index') }}">Players</a>
    </nav>

    <div class="container mx-auto mt-4">
        @yield('content')
    </div>
</body>
</html>
