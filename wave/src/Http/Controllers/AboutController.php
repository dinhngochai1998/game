<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use Wave\Page;

class AboutController extends \App\Http\Controllers\Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = Page::where('slug', 've-chung-toi')->first();
        if($about) {
            return view('game.about', compact('about'));
        }
        abort(404);

    }
}
