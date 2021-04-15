<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Job;
use App\Models\Realisation;
use App\Models\Resume;
use App\Models\Study;
use App\Models\Technology;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $about = About::first();
        $resume = Resume::first();
        $jobs = Job::all();
        $studies = Study::all();
        $competences = Technology::all();
        
        return view('welcome')->with([
            'about' => $about,
            'resume' => $resume,
            'jobs' => $jobs,
            'studies' => $studies,
            'technologies' => $technologies
        ]);
    }
}
