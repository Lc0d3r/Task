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
        // Fetch all rows from both tables
        $opportunities = Opportunity::latest()->get();
        $challenges = Challenge::latest()->get();

        // Pass the data variables straight into the blade view
        return view('public.modules', compact('opportunities', 'challenges'));
    }

    // Loads the contact / join page
    public function contact() 
    { 
        return view('public.contact'); 
    }

    // Handles the incoming form submission
    public function store(Request $request)
    {
        // 1. Validate the incoming data
        $validated = $request->validate([
            'type'         => 'required|string|in:Enterprise,Academic,Startup',
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'organization' => 'required|string|max:255',
            'message'      => 'required|string|max:2000',
        ]);

        // 2. Save it to the database using the ORM model
        Application::create($validated);

        // 3. Send the user back to the form with a success flash message
        return redirect()->route('contact')->with('success', 'Thank you! Your platform application has been submitted successfully.');
    }
}