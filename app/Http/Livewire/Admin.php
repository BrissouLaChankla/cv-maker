<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Job;
use App\Models\Portfolio;
use App\Models\Realisation;
use App\Models\Resume;
use App\Models\Study;
use App\Models\Technology;
use App\Models\Contact;
use Auth;
     
use Livewire\Component;

class Admin extends Component
{
    public function render()
    {
        $user = Auth::user();
        $resume = Resume::first();
        $jobs = Job::all();
        $studies = Study::all();
        $technologies = Technology::all();
        $realisations = Realisation::all();
        $portfolio = Portfolio::first();
        $contact = Contact::first();
        $lastJob = Job::orderBy('start_date', 'DESC')->first();
        
        return view('livewire.admin', [
            'user' => $user,
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
}
