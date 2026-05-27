<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use App\Models\Challenge;
use App\Models\Application;
use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    // Loads the homepage
    public function home() 
    { 
        return view('public.home'); 
    }
    
    // Loads the about page
    public function about() 
    { 
        return view('public.about'); 
    }
    
    // Loads the platform modules page
    public function modules() 
    { 
        return view('public.modules'); 
    }

    // Loads the contact / join page
    public function contact() 
    { 
        return view('public.contact'); 
    }
}