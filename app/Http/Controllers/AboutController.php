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

    public function editAbout(Request $request) {
        
            // Select l'activite en question
            $about = About::first();
            
            // récupère l'image actuelle
            $currentimg = storage_path('app/public/uploads/abouts'.$about->photo);
            
            //La supprime
            @unlink($currentimg);

            //Récupère l'image reçue 
            $file = $request->file('image');
            
            // = storage/app/uploads/images ;
            $destinationPath = storage_path('app/public/uploads/abouts/avatar-left.jpg');
            
            // = Crée l'objet Image ;
            $image = Image::make($file->getRealPath());
            
            // Croppe et Enregistre l'image
            $image->fit(120, 120, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('jpg',100)->save($destinationPath);
            
            return('avatar-left.jpg');
    }
}
