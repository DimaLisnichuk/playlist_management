<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SongsController;







Route::get('/playlist', [PlaylistController::class, 'index'])->name('playlist.index');
Route::post('/playlist', [PlaylistController::class, 'store'])->name('playlist.store');
Route::get('/playlist/create', [PlaylistController::class, 'create'])->name('playlist.create');
Route::get('/playlist/{playlist}/edit', [PlaylistController::class, 'edit'])->name('playlist.edit');
Route::put('/playlist/{playlist}', [PlaylistController::class, 'update'])->name('playlist.update');
Route::delete('/playlist/{playlist}', [PlaylistController::class, 'destroy'])->name('playlist.destroy');

Route::get('/', [SongsController::class, 'index'])->name('songs.index');
Route::post('/songs', [SongsController::class, 'store'])->name('songs.store');
Route::get('/songs/create', [SongsController::class, 'create'])->name('songs.create');
Route::get('/songs/{songs}/edit', [SongsController::class, 'edit'])->name('songs.edit');
Route::put('/songs/{songs}', [SongsController::class, 'update'])->name('songs.update');
Route::delete('/songs/{songs}', [SongsController::class, 'destroy'])->name('songs.destroy');