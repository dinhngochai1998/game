<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use Wave\Page;

class GuideController extends \App\Http\Controllers\Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guide = Page::where('slug', 'huong-dan-tra-cuu')->first();
        if($guide) {
            return view('game.guide', compact('guide'));
        }

        abort(404);
    }
}