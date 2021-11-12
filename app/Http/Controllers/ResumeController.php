<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Study;
use App\Models\Job;
use App\Models\Technology;
use Illuminate\Http\Request;

class ResumeController extends Controller
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
    public function getInfosCompetences () {
        return view('includes.infos-competences');
    }

    public function showResume() {
        $resume = Resume::first();
        $studies = Study::orderBy('start_date', 'DESC')->get();
        $jobs = Job::orderBy('start_date', 'DESC')->get();
        $technologies = Technology::all();

        return view('admin.includes.resume')->with([
            'resume' => $resume,
            'studies' => $studies,
            'jobs' => $jobs,
            'technologies' => $technologies
         ]);
    }
   
}
