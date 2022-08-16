<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Job;
use App\Models\Portfolio;
use App\Models\Realisation;
use App\Models\Resume;
use App\Models\Herotext;
use App\Models\Study;
use App\Models\Technology;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;


class WelcomeController extends Controller
{
    public function welcome()
    {
        $resume = Resume::first();
        $jobs = Job::orderBy('start_date', 'desc')->get();
        $studies = Study::orderBy('start_date', 'DESC')->get();
        $technologies = Technology::all();
        $realisations = Realisation::orderBy('date', 'DESC')->take(6)->get();
        $portfolio = Portfolio::first();
        $contact = Contact::first();
        $herotexts = Herotext::first();
        $lastJob = Job::orderBy('start_date', 'DESC')->first();
        return view('welcome')->with([
            'resume' => $resume,
            'jobs' => $jobs,
            'studies' => $studies,
            'technologies' => $technologies,
            'realisations' => $realisations,
            'lastJob' => $lastJob,
            'contact' => $contact,
            'portfolio' => $portfolio,
            'herotexts' => $herotexts
        ]);
    }

    public function editHero(Request $request) {
        $herotexts = Herotext::first();
        $herotexts->update($request->all());
        return 'Modification effectuée !';
    }

    public function editAvatar(Request $request) {

        $file = $request->file('image');

        // = Crée l'objet Image ;
        $image = Image::make($file);
        
        // Croppe et Enregistre l'image
        $image->resize(null, 120, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp', 100);


        Storage::disk('local')->put(
            'public/common/avatar.webp',
            (string) $image->encode()
        );
    }

    public function editBackground(Request $request) {

        $file = $request->file('background');

        // = Crée l'objet Image ;
        $image = Image::make($file);
        
        // Croppe et Enregistre l'image
       $image->resize(1920, 1080, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp', 100);


        Storage::disk('local')->put(
            'public/common/background.webp',
            (string) $image->encode()
        );
    }

    public function editCv(Request $request) {
        $file = $request->file('cv');
        $filename = "CV.pdf";
        $filePath = public_path();
        $file->move($filePath, $filename);


        return back()->with('success', 'File uploaded successfully.');
    }

}
