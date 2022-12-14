<?php

namespace App\Providers;
use View;
use Schema;
use Carbon\Carbon;
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
        if(Schema::hasTable('navigations')) {
            $navigations = Navigation::all();
            $about = About::first();
            
            View::share([
                'navigations' => $navigations,
                'about' => $about
            ]);
        } else {
            echo("Installation incomplète, BDD non remplie.");
        }
    }
}
