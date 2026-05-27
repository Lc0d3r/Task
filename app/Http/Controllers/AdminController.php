<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opportunity;
use App\Models\Challenge;
use App\Models\Application;

class AdminController extends Controller
{
    public function showLogin() {
        return view('admin.login');
    }

    public function login(Request $request) {
        // Hardcoded credentials for rapid secure prototype evaluation
        if ($request->email === 'admin@ehopn.com' && $request->password === 'password123') {
            $request->session()->put('admin_logged_in', true);
            return redirect()->route('admin.dashboard');
        }
        return back()->with('error', 'Invalid administrative credentials.');
    }

    public function logout(Request $request) {
        $request->session()->forget('admin_logged_in');
        return redirect()->route('admin.login');
    }

    public function dashboard(Request $request) {
        // 1. Gather Statistics (Requirement 2.2 + Bonus Visual Cards)
        $stats = [
            'total_apps' => Application::count(),
            'total_opps' => Opportunity::count(),
            'total_challenges' => Challenge::count(),
        ];

        // 2. Handle Search & Filters (Bonus Feature!)
        $searchOpp = $request->input('search_opp');
        $searchChal = $request->input('search_chal');

        $opportunities = Opportunity::when($searchOpp, function($query, $searchOpp) {
            return $query->where('title', 'like', "%{$searchOpp}%");
        })->latest()->get();

        $challenges = Challenge::when($searchChal, function($query, $searchChal) {
            return $query->where('title', 'like', "%{$searchChal}%");
        })->latest()->get();

        $applications = Application::latest()->get();

        return view('admin.dashboard', compact('stats', 'opportunities', 'challenges', 'applications'));
    }

    // --- OPPORTUNITIES CRUD ---
    public function storeOpportunity(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'description' => 'required|string',
            'country_region' => 'required|string',
            'deadline' => 'required|date',
            'link' => 'nullable|url',
            'status' => 'required|in:Active,Closed',
        ]);
        Opportunity::create($validated);
        return back()->with('success', 'Opportunity created successfully.');
    }

    public function updateOpportunity(Request $request, $id) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'description' => 'required|string',
            'country_region' => 'required|string',
            'deadline' => 'required|date',
            'link' => 'nullable|url',
            'status' => 'required|in:Active,Closed',
        ]);
        Opportunity::findOrFail($id)->update($validated);
        return back()->with('success', 'Opportunity updated successfully.');
    }

    public function deleteOpportunity($id) {
        Opportunity::findOrFail($id)->delete();
        return back()->with('success', 'Opportunity removed.');
    }

    // --- CHALLENGES CRUD ---
    public function storeChallenge(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'organization' => 'required|string',
            'sector' => 'required|string',
            'description' => 'required|string',
            'deadline' => 'required|date',
            'status' => 'required|in:Open,Closed',
        ]);
        Challenge::create($validated);
        return back()->with('success', 'Challenge created successfully.');
    }

    public function updateChallenge(Request $request, $id) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'organization' => 'required|string',
            'sector' => 'required|string',
            'description' => 'required|string',
            'deadline' => 'required|date',
            'status' => 'required|in:Open,Closed',
        ]);
        Challenge::findOrFail($id)->update($validated);
        return back()->with('success', 'Challenge updated successfully.');
    }

    public function deleteChallenge($id) {
        Challenge::findOrFail($id)->delete();
        return back()->with('success', 'Challenge removed.');
    }
}