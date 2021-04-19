<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
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
    
    public function index() {
        $user = Auth::user();

        return view('admin.welcome')->with([
            'user' => $user
        ]);
    }
    
    
    public function showSection($slug) {
        return view('admin.section')->with([
           'section' => $slug 
        ]);
    }
}
