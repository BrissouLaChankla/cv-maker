<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
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
   

}
