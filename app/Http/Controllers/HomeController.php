<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    } 

    public function sitiVetrina() 
    {
        return view('siti.vetrina');
    } 

    public function profilo() 
    {
        return view('me.profilo'); 
    }
    
    public function weather() 
    {
        return view('project.weather'); 
    } 
    
    public function locale($locale)
    {
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
