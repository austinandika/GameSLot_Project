<?php

namespace App\Http\Controllers;

use App\Models\MsGame;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $games = MsGame::paginate(10);

        return view('index', compact('games'));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;

        // game title starts with
        $games = MsGame::where('title', 'LIKE', "$keyword%")
            ->paginate(10)
            ->appends(['keyword' => $keyword]);

        return view('index', compact('games'));
    }
}
