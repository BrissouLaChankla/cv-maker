<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Realisation;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


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
        return view('admin.includes.portfolio')->with([
            'portfolio' => $portfolio,
            'realisations' => $realisations
         ]);
    }

    public function editLogoRea(Request $request) {
        // Select l'activite en question
        $realisation = Realisation::find($request->id);
    
        $namefile = "logo-".$realisation->slug.".webp";

        // récupère l'image actuelle
        $currentimg = storage_path('app/public/uploads/realisations/logo/'.$realisation->logo_path);
        
        //La supprime
        @unlink($currentimg);

        $realisation->update(["logo_path" => $namefile]);
        //Récupère l'image reçue 
        $file = $request->file('logo_path');
        
        // = storage/app/uploads/images ;
        $destinationPath = storage_path('app/public/uploads/realisations/logo/'.$namefile);
        
        // = Crée l'objet Image ;
        $image = Image::make($file->getRealPath());
        
        // Croppe et Enregistre l'image
        $image->fit(120, 120, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',75)->save($destinationPath);
        
        return($namefile);
    }


    public function editBackgroundRea(Request $request) {
        // Select l'activite en question
        $realisation = Realisation::find($request->id);
    
        $namefile = "background-".$realisation->slug.".webp";
        $namefilesmall = "small/background-".$realisation->slug.".webp";

        // récupère l'image actuelle
        $currentimg = storage_path('app/public/uploads/realisations/background/'.$realisation->background_path);
        $currentimgsmall = storage_path('app/public/uploads/realisations/background/'.$realisation->background_path_small);
        
        //La supprime
        @unlink($currentimg);
        @unlink($currentimgsmall);

        $realisation->update(["background_path" => $namefile]);
        $realisation->update(["background_path_small" => $namefilesmall]);

        //Récupère l'image reçue 
        $file = $request->file('background_path');
        
        // = storage/app/uploads/images ;
        $destinationPath = storage_path('app/public/uploads/realisations/background/'.$namefile);
        $destinationPathsmall = storage_path('app/public/uploads/realisations/background/'.$namefilesmall);
        
        // = Crée l'objet Image ;
        $image = Image::make($file->getRealPath());
        
        // Croppe et Enregistre l'image
        $image->fit(400, 200, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',75)->save($destinationPathsmall);
        

        $image->fit(1200, 600, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',100)->save($destinationPath);

        return($namefilesmall);
    }



    public function addRea(Request $request) {
        $realisation = new Realisation($request->all());
        $realisation->save();
        Session::flash('swal','Nouvelle réalisation crée !');
        return back();
    }

    public function editRea(Request $request) {
        $realisation = Realisation::find($request->id);
        $realisation->update($request->all());
        return "Modification effectuée !";
    }

    public function deleteRea($id) {
        $realisation = Realisation::find($id);
        $realisation->delete();
        Session::flash('swal','Réalisation supprimée !');
    }

}
