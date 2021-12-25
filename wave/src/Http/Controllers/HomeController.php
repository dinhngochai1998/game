<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genregame;
use App\Models\Game;
use App\Models\ContentDescriptor;
use App\Models\Country;

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
        $countries = Country::with('games')->get();
        $game = Game::with('genreGame', 'contentDescription')->get();
        // $game = [];
        // if ($game != null) {
        //     $game = Game::with('genreGame', 'contentDescription')->get();
        // }

        $contentDescriptor = ContentDescriptor::get();

        return view('game.index', compact('genreGame', 'game', 'contentDescriptor', 'countries'));
    }

    public function search(Request $request)
    {
        $model = Genregame::orderBy('title');
        if(!empty($request['country'])) {
            $model = $model->where('country_id', $request['country']);
        }

        if(isset($request['descriptor']) && !empty($request['descriptor'][0])) {
            $model = $model->whereIn('id', $request['descriptor']);
        }

        if(!empty($request['search'])) {
            // >where('title', 'like', '%' . $request->search . '%')
            $model = $model->where('key_words', $request->search);
        }

        $genreGame =  $model->get();
        return view('game.search.index', compact('genreGame'));
    }

    public function country(Request $request)
    {
        $countries = Country::orderBy('name')->get();
        return view('game.country', compact('countries'));
    }
}
