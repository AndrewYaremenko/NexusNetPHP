<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{    
    /**
     * Home page
     *
     * @return view
     */
    public function index(){
        return view('main');
    }
}
