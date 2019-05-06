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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->role == 1){
            return redirect('pengguna');        
        } elseif (auth()->user()->role == 2) {
            return redirect('pakar');       
        } 

        // return view('home');


    }

    public function pakar()
    {
        return view('pakar');        
    }
    public function pengguna()
    {
        return view('pengguna');
    }
}
