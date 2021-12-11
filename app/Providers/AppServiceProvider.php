<?php

namespace App\Providers;
use View;
use Carbon\Carbon;
use App\Models\Social;
use App\Models\About;
use App\Models\Navigation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer('*', function($view){
            View::share([
                'view_name' => $view->getName()
            ]);
            
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(Navigation::all()) {
            $socials = Social::whereRaw('link <> ""')->get();
            $navigations = Navigation::all();
            $about = About::first();
            
            View::share([
                'socials' => $socials,
                'navigations' => $navigations,
                'about' => $about
            ]);
        } else {
            dd("Installation incomplète, BDD non remplie.");
        }
    }
}
