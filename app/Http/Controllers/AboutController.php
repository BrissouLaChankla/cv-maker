<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
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

    public function showAbout() {
        $about = About::first();
        return view('admin.includes.about')->with([
            'about' => $about
         ]);
    }

    public function editAbout(Request $request) {
        $about = About::first();
        $about->update($request->all());
        return 'Modification effectuée !';
    }


    public function editProfile(Request $request) {
        
        // Select l'activite en question
        $file = $request->file('profile');
    
        $namefile = "profile.webp";

        // récupère l'image actuelle
        $currentimg = public_path('img/profile.webp');
        
        //La supprime
        @unlink($currentimg);

        // = storage/app/uploads/images ;
        $destinationPath = public_path('img/profile.webp' );
        
        // = Crée l'objet Image ;
        $image = Image::make($file->getRealPath());
        
        // Croppe et Enregistre l'image
        $image->resize(700, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp', 100)->save($destinationPath);

    }
}
