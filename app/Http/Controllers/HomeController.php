<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    	return view('frontend.home');
    }

    public function portfoliodetails()
    {
    	return view('frontend.portfoliodetails');
    }

    public function innerpage()
    {
    	return view('frontend.innerpage');
    }
}
