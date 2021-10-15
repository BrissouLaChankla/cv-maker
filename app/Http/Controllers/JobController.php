<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Session;

class JobController extends Controller
{
    public function addJob(Request $request) {
        $job = new Job($request->all());
        $job->save();
        Session::flash('swal','Nouveau job crée !');
        return back();
    }

    public function editJob(Request $request) {
        $job = Job::find($request->id);
        $job->update($request->all());
        return "Modification effectuée !";
    }

    public function deleteJob($id) {
        $job = Job::find($id);
        $job->delete();
        Session::flash('swal','Job supprimé !');
    }
}
