<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('game')->name('game.')->group(function () {
    Route::get('/{id}', Controllers\Game\Details::class)->name('details');
    Route::patch('/{id}', Controllers\Game\Move::class)->name('move');

    //Route::post('/', Controllers\Game\Create::class)->name('create');
    //Route::get('/join', Controllers\Game\Select::class)->name('select');
    //Route::patch('/join/{id}', Controllers\Game\Join::class)->name('join');

    //Route::post('/revenge/{id}', Controllers\Game\Revenge::class)->name('revenge');
});
