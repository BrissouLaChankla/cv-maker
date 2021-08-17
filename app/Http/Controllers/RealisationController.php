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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function show(Realisation $realisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Realisation $realisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Realisation $realisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Realisation $realisation)
    {
        //
    }
}
