<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Job;
use App\Models\Portfolio;
use App\Models\Realisation;
use App\Models\Resume;
use App\Models\Study;
use App\Models\Technology;
use App\Models\Contact;


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
        $lastJob = Job::orderBy('start_date', 'DESC')->first();
        return view('welcome')->with([
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


    public function editAvatar(Request $request) {
          
        // Select l'activite en question
        $file = $request->file('image');
    
        $namefile = "avatar.webp";

        // récupère l'image actuelle
        $currentimg = public_path('img/avatar.webp');
        
        //La supprime
        @unlink($currentimg);

        // = storage/app/uploads/images ;
        $destinationPath = public_path('img/avatar.webp' );
        
        // = Crée l'objet Image ;
        $image = Image::make($file->getRealPath());
        
        // Croppe et Enregistre l'image
        $image->resize(null, 120, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp', 100)->save($destinationPath);
    }

    public function editBackground(Request $request) {
        
        // Select l'activite en question
        $file = $request->file('background');
    
        $namefile = "background.webp";

        // récupère l'image actuelle
        $currentimg = public_path('img/background.webp');
        
        //La supprime
        @unlink($currentimg);

        // = storage/app/uploads/images ;
        $destinationPath = public_path('img/background.webp' );
        
        // = Crée l'objet Image ;
        $image = Image::make($file->getRealPath());
        
        // Croppe et Enregistre l'image
        $image->resize(1920, 1080, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp', 100)->save($destinationPath);
    }

    public function editCv(Request $request) {
        $file = $request->file('cv');
        $filename = "CV.pdf";
        $filePath = public_path();
        $file->move($filePath, $filename);


        return back()->with('success', 'File uploaded successfully.');
    }

}
