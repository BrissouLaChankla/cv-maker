<?php

namespace App\Providers;
use View;
use Carbon\Carbon;
use App\Models\Social;
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
            $socials = Social::whereRaw('link <> ""')->get();
            $navigations = Navigation::all();

            View::share([
                'view_name' => $view->getName(),
                'socials' => $socials,
                'navigations' => $navigations
            
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

    }
}
