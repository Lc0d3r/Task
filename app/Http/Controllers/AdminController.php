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
            'total_contacts' => Application::where('type', 'Contact')->count(),
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

        // Separate Join Requests from General Contact Messages (Requirement 2.3 & 2.6)
        $joinRequests = Application::where('type', '!=', 'Contact')->latest()->get();
        $contactMessages = Application::where('type', 'Contact')->latest()->get();

        return view('admin.dashboard', compact('stats', 'opportunities', 'challenges', 'joinRequests', 'contactMessages'));
    }

    // --- OPPORTUNITIES CRUD ---
    public function storeOpportunity(Request $request) {
        // Ensure status defaults to Active if not provided by the quick-add form
        $request->merge(['status' => $request->status ?? 'Active']);
        
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'description' => 'required|string',
            'country_region' => 'required|string',
            'deadline' => 'required|date',
            'link' => 'nullable|url',
            'status' => 'required|in:Active,Closed',
        ]);
        Opportunity::create($data);
        return back()->with('success', 'Opportunity created successfully.');
    }

    public function updateOpportunity(Request $request, $id) {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'description' => 'required|string',
            'country_region' => 'required|string',
            'deadline' => 'required|date',
            'link' => 'nullable|url',
            'status' => 'required|in:Active,Closed',
        ]);
        Opportunity::findOrFail($id)->update($data);
        return back()->with('success', 'Opportunity updated successfully.');
    }

    public function deleteOpportunity($id) {
        Opportunity::findOrFail($id)->delete();
        return back()->with('success', 'Opportunity removed.');
    }

    // --- CHALLENGES CRUD ---
    public function storeChallenge(Request $request) {
        // Ensure status defaults to Open if not provided
        $request->merge(['status' => $request->status ?? 'Open']);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'organization' => 'required|string',
            'sector' => 'required|string',
            'description' => 'required|string',
            'deadline' => 'required|date',
            'status' => 'required|in:Open,Closed',
        ]);
        Challenge::create($data);
        return back()->with('success', 'Challenge created successfully.');
    }

    public function updateChallenge(Request $request, $id) {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'organization' => 'required|string',
            'sector' => 'required|string',
            'description' => 'required|string',
            'deadline' => 'required|date',
            'status' => 'required|in:Open,Closed',
        ]);
        Challenge::findOrFail($id)->update($data);
        return back()->with('success', 'Challenge updated successfully.');
    }

    public function deleteChallenge($id) {
        Challenge::findOrFail($id)->delete();
        return back()->with('success', 'Challenge removed.');
    }
}