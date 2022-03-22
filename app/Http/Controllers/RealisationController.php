<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use App\Models\RealisationTechnology;
use App\Models\Technology;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showAll() {
        return 'cringe';
    }

    public function showProject($slug) {
        $realisation = Realisation::where('slug', $slug)->first();
        $pictures = $realisation->pictures;
        return view('realisation')->with([
            'realisation' => $realisation,
            'pictures' => $pictures
        ]);
    }

    public function loadProject($nb) {
        $allRealisations = Realisation::orderBy('date', 'desc')->get();
        $chunks = $allRealisations->chunk(6);
        $chunks->toArray();
        return($chunks[0]);
    }
    
    public function editReaTechnology(Request $request) {
        
        
        // Ajoute la techno manquante 
        foreach($request->except('_token', 'realisation_id') as $key => $newreatech) {
            RealisationTechnology::firstOrcreate([
                'technology_id' => $key,
                'realisation_id' => $request->realisation_id,
            ]);
        }
        
        //retire la techno
        $technologies = Technology::all();
        $technologiestoadd = array_keys($request->except('_token', 'realisation_id'));
        foreach ($technologies as $technology) {
            if(!in_array($technology->id, $technologiestoadd)) {
                RealisationTechnology::where('technology_id', '=', $technology->id)->where('realisation_id', '=', $request->realisation_id)->delete();
            }
        }




        return "Modification effectuée !";
    }
   

}
