<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function getInfosTechnology($id) {
        $technology = Technology::find($id);
        $realisations = $technology->realisations;
        return $technology;
    }
    
    public function addTechnology(Request $request) {
        $technology = new Technology($request->all());
        $technology->save();
        Session::flash('swal','Nouvelle technologie crée !');
        return back();
    }

    public function editTechnology(Request $request) {
        if ($request->resume_id == 1) {
            $request->merge(['resume_id' => 1]);
        } else {
            $request->merge(['resume_id' => 0]);
        }
        $technology = Technology::find($request->id);
        $technology->update($request->all());
        return "Modification effectuée !";
    }

    public function deleteTechnology($id) {
        $technology = Technology::find($id);
        $technology->delete();
        Session::flash('swal','Technologie supprimée !');
    }
}
