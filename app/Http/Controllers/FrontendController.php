<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
       
        return view('frontend.pages.index');
    }

    public function askQuestion(){
        
        return view('frontend.pages.ask_question');
    }
}
