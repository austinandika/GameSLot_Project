<?php

namespace App\Http\Controllers;

use App\Models\MsGame;
use App\Models\MsGameGenre;
use Illuminate\Http\Request;

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

    public function getGameDetailUpdate($id)
    {
        $game = MsGame::find($id);
        $genres = MsGameGenre::all();

        return view('AdminMenu/updateGame', compact(['game', 'genres']));
    }

    public function deleteGame($id)
    {
        $game = MsGame::find($id);
        $game->delete();

        return redirect()->back();
    }
}
