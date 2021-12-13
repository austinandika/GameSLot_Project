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
}
