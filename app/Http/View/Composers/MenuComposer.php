<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Country;
use App\Models\Genregame;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @rerurn void
     */
    public function compose(View $view)
    {
        $countries = Country::get();
        $genreGame = Genregame::orderBy('country_id')->get();
        $view->with(compact(
            'countries',
            'genreGame'
        ));
    }
}
