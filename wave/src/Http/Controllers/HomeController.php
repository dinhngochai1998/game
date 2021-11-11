<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genregame;
use App\Models\Game;
use App\Models\ContentDescriptor;

class HomeController extends \App\Http\Controllers\Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $genreGame = Genregame::get();
        $game = Game::with('genreGame', 'contentDescription')->get();
        // $game = [];
        // if ($game != null) {
        //     $game = Game::with('genreGame', 'contentDescription')->get();
        // }

        $contentDescriptor = ContentDescriptor::get();

        return view('game.index', compact('genreGame', 'game', 'contentDescriptor'));
    }

    public function search(Request $request)
    {
        $genreGame = Game::with('genregame')->orderBy('name', 'desc')->get();
        // dd($genreGame);
        $game = Game::where('name', 'like', '%' . $request->search . '%')->with('genreGame')->get();

        return view('game.search.index', compact('game', 'genreGame'));
    }
}
