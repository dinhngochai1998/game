<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genregame;
use App\Models\ContentDescriptor;
use App\Models\Country;

class DetailController extends \App\Http\Controllers\Controller
{

    public function descriptor(Request $request) {

        $descriptor = ContentDescriptor::where('slug', $request->slug)->first();


        if ($request->ajax()) {
            if(!empty($request['slug_default'])) {
                $descriptor = ContentDescriptor::where('slug', $request->slug_default)->first();
                $listDescriptorByCountry = ContentDescriptor::where('country_id', $descriptor->country_id)->get();
            } else {
                $listDescriptorByCountry = ContentDescriptor::where(['country_id' => $descriptor->country_id, 'parent_id' => $descriptor->id])->get();
            }
    		$view = view('game.listDes', compact('listDescriptorByCountry'))->render();
            return response()->json(['html' => $view]);
        }

        if($descriptor) {
            $descriptorByCountry = ContentDescriptor::where('country_id', $descriptor->country_id)->whereNull('parent_id')->get();
            $listDescriptorByCountry = ContentDescriptor::where('country_id', $descriptor->country_id)->get();
            return view('game.detail', compact('descriptor', 'descriptorByCountry', 'listDescriptorByCountry'));
        }

        abort(404);
    }

    public function genreGame(Request $request) {

        $genreGame = Genregame::where('slug', $request->slug)->first();
        if($genreGame) {
            $genreGameByCountry = Genregame::where('country_id', $genreGame->country_id)->get();
            return view('game.detailGenreAge', compact('genreGame', 'genreGameByCountry'));
        }

        abort(404);
    }

    public function categoryGenreGame(Request $request) {
        $country = Country::where('slug' , $request->country)->first();
        if($country) {
            $genreGame = Genregame::where('country_id', $country->id)->get();
             return view('game.category', compact('genreGame'));
        }
        abort(404);
    }

    public function categoryDescriptor(Request $request) {
        $country = Country::where('slug' , $request->country)->first();
        if($country) {
            $categoryDescriptor = ContentDescriptor::where('country_id', $country->id)->whereNull('parent_id')->get();
             return view('game.categoryDescriptor', compact('categoryDescriptor'));
        }
        abort(404);
    }

}