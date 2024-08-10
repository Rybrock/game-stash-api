<?php

use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

// developers
Route::get('developers', [DeveloperController::class, 'index']);
// create a developer
Route::post('developers', [DeveloperController::class, 'store']);
Route::get('developers/{id}', [DeveloperController::class, 'show']);

// games
Route::get('games', [GameController::class, 'index']);
// create a game
Route::post('games', [GameController::class, 'store']);
Route::get('games/{id}', [GameController::class, 'show']);
