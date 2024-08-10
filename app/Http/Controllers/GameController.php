<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGameRequest;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();

        return response()->json($games);
    }

    // store a developer
    public function store(StoreGameRequest $request)
    {
        $game = Game::create($request->validated());
        // dd($developer);

        return response()->json($game, 201);
    }

    // show a developer

    public function show($id)
    {
        $game = Game::with('developer')->findOrFail($id);

        return response()->json($game);
    }
}
