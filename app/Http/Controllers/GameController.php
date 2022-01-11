<?php

namespace App\Http\Controllers;

use App\Models\MsGame;
use App\Models\MsGameGenre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function getGameDetail($id)
    {
        $game = MsGame::find($id);

        return view('gameDetail', compact('game'));
    }

    public function getListGameDetail()
    {
        $games = MsGame::all();

        return view('AdminMenu/manageGame', compact('games'));
    }

    public function deleteGame($id)
    {
        $game = MsGame::find($id);

        // remove image
        Storage::delete('public/' . $game->image);

        $game->delete();

        return redirect()->back();
    }

    public function getAddGameView()
    {
        $genres = MsGameGenre::all();

        return view('AdminMenu/addGame', compact('genres'));
    }

    public function getGameDetailUpdate($id)
    {
        $game = MsGame::find($id);
        $genres = MsGameGenre::all();

        return view('AdminMenu/updateGame', compact(['game', 'genres']));
    }

    public function addGame(Request $request)
    {
        // jika add new genre
        if ($request->genre == "0") {
            $validatedData = $request->validate([
                'title' => 'required',
                'image' => 'required|image',
                'description' => 'required',
                'price' => 'required|numeric|min:0',
                'new_genre' => 'required|unique:ms_game_genres,genre',
                'pegi_rating' => 'required|in:0,3,7,12,16,18'
            ]);

            // save new genre to db
            $genre = new MsGameGenre();
            $genre->genre = $validatedData['new_genre'];
            $genre->save();

            // get genreId
            $validatedData['genre'] = $genre->id;
        } else {
            $validatedData = $request->validate([
                'title' => 'required',
                'image' => 'required|image',
                'description' => 'required',
                'price' => 'required|numeric|min:0',
                'genre' => 'required',
                'pegi_rating' => 'required|in:0,3,7,12,16,18'
            ]);
        }

        // UNTUK SIMPEN IMAGE
        $file = $request->file('image');
        $imageName = time() . '.' . $file->getClientOriginalExtension();
        Storage::putFileAs('public/gameImage', $file, $imageName);

        // save new game
        $game = new MsGame();
        $game->title = $validatedData['title'];
        $game->image = 'gameImage/' . $imageName;
        $game->description = $validatedData['description'];
        $game->price = $validatedData['price'];
        $game->pegi_rating = $validatedData['pegi_rating'];
        $game->game_genre_id = $validatedData['genre'];
        $game->save();

        return redirect()->route('manageGame.manage')->with('success', 'Game has been added');
    }

    public function updateGame(Request $request)
    {
        // jika add new genre
        if ($request->genre == "0") {
            $validatedData = $request->validate([
                'title' => 'required',
                'image' => 'image',
                'description' => 'required',
                'price' => 'required|numeric|min:0',
                'new_genre' => 'required|unique:ms_game_genres,genre',
                'pegi_rating' => 'required|in:0,3,7,12,16,18'
            ]);

            // save new genre to db
            $genre = new MsGameGenre();
            $genre->genre = $validatedData['new_genre'];
            $genre->save();

            // get genreId
            $validatedData['genre'] = $genre->id;
        } else {
            $validatedData = $request->validate([
                'title' => 'required',
                'image' => 'image',
                'description' => 'required',
                'price' => 'required|numeric|min:0',
                'genre' => 'required',
                'pegi_rating' => 'required|in:0,3,7,12,16,18'
            ]);
        }

        $game = MsGame::find($request->id);

        if ($request->image != null) {
            // UNTUK SIMPEN IMAGE
            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            Storage::putFileAs('public/gameImage', $file, $imageName);

            // delete file foto yang lama
            if ($game->image != null) {
                Storage::delete('public/' . $game->image);
            }

            $game->image = 'gameImage/' . $imageName;
        }
        // update
        $game->title = $validatedData['title'];
        $game->description = $validatedData['description'];
        $game->price = $validatedData['price'];
        $game->pegi_rating = $validatedData['pegi_rating'];
        $game->game_genre_id = $validatedData['genre'];
        $game->save();

        return redirect()->route('manageGame.manage')->with('success', 'Game has been updated');
    }
}
