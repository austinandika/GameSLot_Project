<?php

namespace App\Http\Controllers;

use App\Models\MsGame;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function getGameDetail($id)
    {
        $game = MsGame::find($id);

        return view('gameDetail', compact('game'));
    }
}
