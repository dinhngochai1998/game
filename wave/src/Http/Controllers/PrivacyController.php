<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use Wave\Page;

class PrivacyController extends \App\Http\Controllers\Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $privacy = Page::where('slug', 'privacy')->first();
        if($privacy) {
            return view('game.privacy', compact('privacy'));
        }

        abort(404);
    }
}