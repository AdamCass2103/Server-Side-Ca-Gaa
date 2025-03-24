<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;   // Import Player model
use App\Models\Post;     // Import Post model

class PageController extends Controller
{
    public function home()
    {
        $players = Player::all(); // Get all players
        $posts = Post::all();     // Get all posts

        return view('home', compact('players', 'posts')); // Pass both to view
    }
    public function index() {
        $players = Player::all();
        $posts = Post::latest()->take(5)->get(); // Get latest 5 posts

        return view('home', compact('players', 'posts'));
    }

    public function about()
{
    return view('about');
}

    public function contact()
    {
        return view('contact');
    }
}
