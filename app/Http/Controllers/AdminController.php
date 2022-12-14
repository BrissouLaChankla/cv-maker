<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Job;
use App\Models\Portfolio;
use App\Models\Realisation;
use App\Models\Resume;
use App\Models\Study;
use App\Models\Technology;
use App\Models\Herotext;
use App\Models\Contact;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function index() {
        $user = Auth::user();
        $about = About::first();
        $resume = Resume::first();
        $jobs =Job::orderBy('start_date', 'DESC')->get();
        $studies =  Study::orderBy('start_date', 'DESC')->get();
        $technologies = Technology::all();
        $realisations = Realisation::all();
        $portfolio = Portfolio::first();
        $contact = Contact::first();
        $lastJob = Job::orderBy('start_date', 'DESC')->first();

        return view('admin.welcome')->with([
            'user' => $user,
            'about' => $about,
            'resume' => $resume,
            'jobs' => $jobs,
            'studies' => $studies,
            'technologies' => $technologies,
            'realisations' => $realisations,
            'lastJob' => $lastJob,
            'contact' => $contact,
            'portfolio' => $portfolio
        ]);
    }
    
    public function showHero() {
        $herotexts = Herotext::first();
        return view('admin.includes.hero')->with([
           'section' => "section",
           'herotexts' => $herotexts
        ]);
    }
}
