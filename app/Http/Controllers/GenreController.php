<?php

namespace App\Http\Controllers;

use App\Models\MsGameGenre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function getListGenreDetail()
    {
        $genres = MsGameGenre::all();

        return view('AdminMenu/manageGameGenre', compact('genres'));
    }

    public function getGenreDetailUpdate($id)
    {
        $genre = MsGameGenre::find($id);

        return view('AdminMenu/updateGameGenre', compact('genre'));
    }

    public function updateGenre(Request $request)
    {
        $genre = MsGameGenre::find($request->id);

        $request->validate([
            'genre' => 'required|unique:ms_game_genres,genre,' . $genre->id
        ]);

        $genre->genre = $request->genre != null ? $request->genre : $genre->genre;
        $genre->save();

        return redirect()->route('manageGenre.manage')->with('success', 'Genre has been updated');
    }
}
