<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use App\Models\Playlist; // Додайте імпорт для моделі Playlist

use Illuminate\Http\Request;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Songs::all();
        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $playlist = Playlist::all(); // Змініть змінну playlist на playlists
        return view('songs.create', compact('playlist')); // Змініть playlist на playlists
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Songs::create($request->all());
        return redirect()->route('songs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Songs $songs)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Songs $songs)
    {
        $playlist = Playlist::all(); // Змініть змінну playlist на playlists

        return view('songs.edit', compact('songs', 'playlist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Songs $songs)
    {
        $songs->update($request->all());
        return redirect()->route('songs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Songs $songs)
    {
        $songs->delete();
        return redirect()->route('songs.index');
    }
}
