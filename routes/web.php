<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\RealisationController;
use Illuminate\Support\Facades\Http;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', [WelcomeController::class, 'welcome']);
// $response = Http::withHeaders([
  //     'api_key' => 'RGAPI-ca20d3a2-8e7a-44b0-b1c1-f152a91fd3db',
  // ])->get('https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/Pr%C3%A9puce%20Endolori');
  // dd($response);

Route::get('/infos/competences', [ResumeController::class, 'getInfosCompetences']);

Route::get('/projets', [RealisationController::class, 'showAll'])->name('allProjects');
Route::get('/projet/{slug}', [RealisationController::class, 'showProject'])->name('project');

Route::get('/home', [HomeController::class, 'index'])->name('home');
