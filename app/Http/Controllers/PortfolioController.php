<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Realisation;
use App\Models\Technology;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Session;
use Illuminate\Support\Facades\Storage;


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
        
        // = Crée l'objet Image ;
        $image = Image::make($file);
        
        // Croppe et Enregistre l'image
        $image->resize(null, 240, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',100);


        Storage::disk('local')->put(
            'public/realisations/'.$realisation->slug.'/logo.webp',
            (string) $image->encode()
        );
        
    }


    public function editBackgroundRea($realisation, $file) {


        // = Crée l'objet Image ;
        $image = Image::make($file);
        $imageSmall = Image::make($file);

        
        $image->fit(1920, 1080, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',100);
        
        $imageSmall->fit(600, 400, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',100);
        
        
        Storage::disk('local')->put(
            'public/realisations/'.$realisation->slug.'/background.webp',
            (string) $image->encode()
        );

        Storage::disk('local')->put(
            'public/realisations/'.$realisation->slug.'/background_small.webp',
            (string) $imageSmall->encode()
        );



    }



    public function addRea(Request $request) {
        $realisation = new Realisation($request->all());
        $request->merge(['slug' => str_slug($request->name, "-")]);

        $fileLogo = $request->file('logo_path');
        $fileBackground = $request->file('background_path');

        $imageLogo = Image::make($fileLogo);
        $imageBackground = Image::make($fileBackground);
        $imageBackgroundSmall = Image::make($fileBackground);


        $imageBackground->fit(1920, 1080, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',100);

        $imageBackgroundSmall->fit(600, 400, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',100);

        $imageLogo->resize(null, 240, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp',100);



        Storage::disk('local')->put(
            'public/realisations/'.$request->slug.'/background.webp',
            (string) $imageBackground->encode()
        );

        Storage::disk('local')->put(
            'public/realisations/'.$request->slug.'/background_small.webp',
            (string) $imageBackgroundSmall->encode()
        );

        Storage::disk('local')->put(
            'public/realisations/'.$request->slug.'/logo.webp',
            (string) $imageLogo->encode()
        );

        
        $realisation->save();

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
        Storage::deleteDirectory('public/'.$realisation->slug);
        Session::flash('swal','Réalisation supprimée !');
    }

}
