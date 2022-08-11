<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

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

Route::get('/', [WelcomeController::class, 'welcome'])->name('front');


Route::get('/infos/competences', [ResumeController::class, 'getInfosCompetences']);
Route::get('/infos/technology/{id}', [TechnologyController::class, 'getInfosTechnology']);

Route::get('/projets', [RealisationController::class, 'showAll'])->name('allProjects');
Route::get('/projet/{slug}', [RealisationController::class, 'showProject'])->name('project');
Route::get('/loadprojects/{nb}', [RealisationController::class, 'loadProject'])->name('load-project');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');



// Admin

//Index
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

// show
Route::get('/admin/hero', [AdminController::class, 'showHero'])->name('show-hero');
Route::get('/admin/about', [AboutController::class, 'showAbout'])->name('show-about');
Route::get('/admin/resume', [ResumeController::class, 'showResume'])->name('show-resume');
Route::get('/admin/portfolio', [PortfolioController::class, 'showPortfolio'])->name('show-portfolio');


// Edit 
Route::post('/edit/about', [AboutController::class, 'editAbout'])->name('edit-about');
Route::post('/edit/contact', [ContactController::class, 'editContact'])->name('edit-contact');
Route::post('/edit/resume', [ResumeController::class, 'editResume'])->name('edit-resume');
Route::post('/edit/job', [JobController::class, 'editJob'])->name('edit-job');
Route::post('/edit/navigation', [NavigationController::class, 'editNavigation'])->name('edit-navigation');
Route::post('/edit/portfolio', [PortfolioController::class, 'editPortfolio'])->name('edit-portfolio');
Route::post('/edit/rea', [PortfolioController::class, 'editRea'])->name('edit-realisation');
Route::post('/edit/social', [SocialController::class, 'editSocial'])->name('edit-social');
Route::post('/edit/study', [StudyController::class, 'editStudy'])->name('edit-study'); 
Route::post('/edit/technology', [TechnologyController::class, 'editTechnology'])->name('edit-technology');
Route::post('/edit/reatechnology', [RealisationController::class, 'editReaTechnology'])->name('edit-rea-technology');

Route::post('/edit/avatar', [WelcomeController::class, 'editAvatar'])->name('edit-avatar');
Route::post('/edit/profile', [AboutController::class, 'editProfile'])->name('edit-profile');
Route::post('/edit/background', [WelcomeController::class, 'editBackground'])->name('edit-background');

Route::post('/edit/cv', [WelcomeController::class, 'editCv'])->name('edit-cv');


//Images
    Route::post('/edit/about/picture', [AboutController::class, 'editAboutPicture'])->name('edit-about-picture');


// Delete
Route::delete('/delete/study/{id}', [StudyController::class, 'deleteStudy'])->name('delete-study');
Route::delete('/delete/job/{id}', [JobController::class, 'deleteJob'])->name('delete-job');
Route::delete('/delete/rea/{id}', [PortfolioController::class, 'deleteRea'])->name('delete-rea');
Route::delete('/delete/technology/{id}', [TechnologyController::class, 'deleteTechnology'])->name('delete-technology');


// Create
Route::post('/create/study', [StudyController::class, 'addStudy'])->name('add-study');
Route::post('/create/job', [JobController::class, 'addJob'])->name('add-job');
Route::post('/create/rea', [PortfolioController::class, 'addRea'])->name('add-rea');
Route::post('/create/technology', [TechnologyController::class, 'addTechnology'])->name('add-technology');
