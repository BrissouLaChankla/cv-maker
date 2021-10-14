<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;
use Session;

class StudyController extends Controller
{
  
    public function addStudy(Request $request) {
        $study = new Study($request->all());
        $study->save();
        Session::flash('swal','Nouvelle formation crée !');
        return back();
    }

    public function editStudy(Request $request) {
        $study = Study::find($request->id);
        $study->update($request->all());
        return "Modification effectuée !";
    }

    public function deleteStudy($id) {
        $study = Study::find($id);
        $study->delete();
        Session::flash('swal','Formation supprimée !');
    }
}
