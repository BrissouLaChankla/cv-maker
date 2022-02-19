<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Realisation;
use App\Models\Technology;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Session;

class PortfolioController extends Controller
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

    public function showPortfolio() {
        $portfolio = Portfolio::first();
        $realisations = Realisation::all();
        $technologies = Technology::all();
        
        return view('admin.includes.portfolio')->with([
            'portfolio' => $portfolio,
            'realisations' => $realisations,
            'technologies' => $technologies
         ]);
    }

    public function editPortfolio(Request $request) {
        $portfolio = Portfolio::first();
        $portfolio->update($request->all());
        return "Modification effectuée !";
    }

    public function editLogoRea($realisation, $file) {
        
        // Select l'activite en question
    
        $namefile = "logo-".$realisation->slug.".webp";

        // récupère l'image actuelle
        $currentimg = storage_path('app/public/uploads/realisations/logo/'.$realisation->logo_path);
        
        //La supprime
        @unlink($currentimg);

        $realisation->update(["logo_path" => $namefile]);
        
        // = storage/app/uploads/images ;
        $destinationPath = storage_path('app/public/uploads/realisations/logo/'.$namefile);
        
        // = Crée l'objet Image ;
        $image = Image::make($file->getRealPath());
        
        // Croppe et Enregistre l'image
        $image->resize(null, 120, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',100)->save($destinationPath);
        
    }


    public function editBackgroundRea($realisation, $file) {

        $namefile = "background-".$realisation->slug.".webp";
        $namefilesmall = "small/background-".$realisation->slug.".webp";

        // récupère l'image actuelle
        $currentimg = storage_path('app/public/uploads/realisations/background/'.$realisation->background_path);
        $currentimgsmall = storage_path('app/public/uploads/realisations/background/'.$realisation->background_path_small);
        
        //La supprime
        @unlink($currentimg);
        @unlink($currentimgsmall);

        $realisation->update(["background_path" => $namefile, "background_path_small" => $namefilesmall]);

        
        // = storage/app/uploads/images ;
        $destinationPath = storage_path('app/public/uploads/realisations/background/'.$namefile);
        $destinationPathsmall = storage_path('app/public/uploads/realisations/background/'.$namefilesmall);
        
        // = Crée l'objet Image ;
        $image = Image::make($file->getRealPath());
        
        // Croppe et Enregistre l'image
        $image->fit(400, 200, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',75)->save($destinationPathsmall);
        

        $image->fit(1920, 1080, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',100)->save($destinationPath, 100);

    }



    public function addRea(Request $request) {
        $realisation = new Realisation($request->all());
        $request->merge(['slug' => str_slug($request->name, "-")]);

        $namelogo = "logo-".$request->slug.".webp";
        $namebackground = "background-".$request->slug.".webp";
        $namebackgroundsmall = "small/background-".$request->slug.".webp";

        $destinationPathBackground = storage_path('app/public/uploads/realisations/background/'.$namebackground);
        $destinationPathBackgroundSmall = storage_path('app/public/uploads/realisations/background/'.$namebackgroundsmall);
        $destinationPathLogo = storage_path('app/public/uploads/realisations/logo/'.$namelogo);
        
        $fileLogo = $request->file('logo_path');
        $fileBackground = $request->file('background_path');
        
        $imageLogo = Image::make($fileLogo->getRealPath());
        $imageBackground = Image::make($fileBackground->getRealPath());

        $imageBackground->fit(400, 200, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',100)->save($destinationPathBackgroundSmall);
        
        $imageBackground->fit(1920, 1080, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',100)->save($destinationPathBackground, 100);

        $imageLogo->resize(null, 120, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',100)->save($destinationPathLogo);

        $realisation->save();

        $realisation->update(["logo_path" => $namelogo, "background_path" => $namebackground, "background_path_small" => $namebackgroundsmall]);

        Session::flash('swal','Nouvelle réalisation crée !');
        return back();
    }

    public function editRea(Request $request) {
        $realisation = Realisation::find($request->id);

        if($request->hasFile('logo_path')) {
            $this->editLogoRea($realisation, $request->file('logo_path'));
        }
        if($request->hasFile('background_path')) {
            $this->editBackgroundRea($realisation, $request->file('background_path'));
        }

        $request->merge(['slug' => str_slug($request->name, "-")]);
        $realisation->update($request->except(["logo_path", "background_path"]));
        return "Modification effectuée !";
    }

    public function deleteRea($id) {
        $realisation = Realisation::find($id);
        $realisation->delete();
        Session::flash('swal','Réalisation supprimée !');
    }

}
