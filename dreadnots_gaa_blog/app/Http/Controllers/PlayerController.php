<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{

    public function index()
{
    $players = Player::all(); // Pull all players from the DB
    return view('players.index', compact('players'));
}

    // Show form to create a new player
    public function create()
    {
        return view('players.create');
    }

    // Store a new player in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'position' => 'required',
            'goals' => 'required|numeric',
            'points' => 'required|numeric',
            'turnovers' => 'required|numeric',
            'possessions_lost' => 'required|numeric',
            'possessions_won' => 'required|numeric',
        ]);

        Player::create($request->all());

        return redirect()->route('players.index');
    }

    // Show a single player
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    // Show form to edit a player
    public function edit(Player $player)
    {
        return view('players.edit', compact('player'));
    }

    // Update a player in the database
    public function update(Request $request, Player $player)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'position' => 'required',
            'goals' => 'required|numeric',
            'points' => 'required|numeric',
            'turnovers' => 'required|numeric',
            'possessions_lost' => 'required|numeric',
            'possessions_won' => 'required|numeric',
        ]);

        $player->update($request->all());

        return redirect()->route('players.index');
    }

    // Delete a player
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('players.index');
    }
}