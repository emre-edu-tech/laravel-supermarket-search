<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('frontend.pages.index');
    }

    public function marketSearch(){
    	return view('frontend.pages.market-search');
    }

    public function contact(){
    	return view('frontend.pages.contact');
    }

    public function privacy(){
    	return view('frontend.pages.privacy');
    }

    public function marketDetails(){
    	return view('frontend.pages.market-details');
    }
}
