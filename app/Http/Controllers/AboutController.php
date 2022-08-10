<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

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
        
        $file = $request->file('profile');

        // = Crée l'objet Image ;
        $image = Image::make($file);
        
        // Croppe et Enregistre l'image
        $image->resize(500, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp', 100);


        Storage::disk('local')->put(
            'public/common/profile.webp',
            (string) $image->encode()
        );

    }
}
