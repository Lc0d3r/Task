@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    
    <!-- Top Bar -->
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-black text-indigo-950">Administrative Control Center</h1>
            <p class="text-gray-600 text-sm">Real-time EHOPn ecosystem platform management.</p>
        </div>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-red-50 text-red-600 border border-red-200 px-4 py-2 rounded-lg text-sm font-medium hover:bg-red-100 transition">Logout</button>
        </form>
    </div>

    <!-- Status Messages & Validation Errors -->
    @if ($errors->any())
        <div class="mb-8 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg text-sm">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="mb-8 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-lg text-sm">{{ session('success') }}</div>
    @endif

    <!-- 1. Stats Grid (Requirement 2.2 + Bonus Charts/Cards) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Applications</p>
                <p class="text-3xl font-extrabold text-indigo-950 mt-1">{{ $stats['total_apps'] }}</p>
            </div>
            <span class="text-3xl p-3 bg-indigo-50 rounded-lg">📋</span>
        </div>
        <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Active Opportunities</p>
                <p class="text-3xl font-extrabold text-emerald-600 mt-1">{{ $stats['total_opps'] }}</p>
            </div>
            <span class="text-3xl p-3 bg-emerald-50 rounded-lg">💰</span>
        </div>
        <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Ecosystem Challenges</p>
                <p class="text-3xl font-extrabold text-amber-600 mt-1">{{ $stats['total_challenges'] }}</p>
            </div>
            <span class="text-3xl p-3 bg-amber-50 rounded-lg">🚀</span>
        </div>
    </div>

    <!-- 2. Manage Incoming Applications (Requirement 2.3) -->
    <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6 mb-10">
        <h2 class="text-xl font-bold text-indigo-950 mb-4">Ecosystem Join Applications (Startups, Research, etc.)</h2>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-indigo-950 font-semibold uppercase text-xs">
                    <tr>
                        <th class="p-3">Applicant Name</th>
                        <th class="p-3">Email</th>
                        <th class="p-3">Organization</th>
                        <th class="p-3">Target Profile</th>
                        <th class="p-3">Message Snippet</th>
                        <th class="p-3">Submitted Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($joinRequests as $app)
                    <tr>
                        <td class="p-3 font-bold text-gray-900">{{ $app->name }}</td>
                        <td class="p-3 text-indigo-600">{{ $app->email }}</td>
                        <td class="p-3">{{ $app->organization }}</td>
                        <td class="p-3">
                            <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold bg-indigo-50 text-indigo-700 uppercase">
                                {{ $app->type }}
                            </span>
                        </td>
                        <td class="p-3 max-w-xs truncate">{{ $app->message }}</td>
                        <td class="p-3 text-xs text-gray-400">{{ $app->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="p-4 text-center text-gray-400">No applications received yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- 4. Manage General Contact Messages (Requirement 2.6) -->
    <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6 mb-10">
        <h2 class="text-xl font-bold text-indigo-950 mb-4">General Contact Messages</h2>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-indigo-950 font-semibold uppercase text-xs">
                    <tr>
                        <th class="p-3">Name</th>
                        <th class="p-3">Email</th>
                        <th class="p-3">Message Content</th>
                        <th class="p-3">Submitted Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($contactMessages as $msg)
                    <tr>
                        <td class="p-3 font-bold text-gray-900">{{ $msg->name }}</td>
                        <td class="p-3 text-indigo-600">{{ $msg->email }}</td>
                        <td class="p-3 max-w-lg">{{ $msg->message }}</td>
                        <td class="p-3 text-xs text-gray-400">{{ $msg->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="4" class="p-4 text-center text-gray-400">No messages received yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- 3. Opportunities & Challenges Split Manager (Requirement 2.4 + 2.5 + Search Bonus) -->
    <div class="grid md:grid-cols-2 gap-8">
        
        <!-- Opportunities CRUD Box -->
        <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-bold text-indigo-950">Manage Funding & Grants</h3>
                <form method="GET" class="flex gap-2">
                    <input type="text" name="search_opp" value="{{ request('search_opp') }}" placeholder="Filter title..." class="px-2 py-1 text-xs border rounded-lg">
                    <button type="submit" class="bg-gray-100 text-xs px-2 rounded-lg">Go</button>
                </form>
            </div>

            <!-- Fast Quick-Add Form -->
            <form action="{{ route('admin.opportunities.store') }}" method="POST" class="bg-gray-50 p-4 rounded-xl mb-4 text-xs space-y-2">
                @csrf
                <div class="grid grid-cols-2 gap-2">
                    <input type="text" name="title" placeholder="Opportunity Title" required class="p-2 border rounded">
                    <input type="text" name="type" placeholder="Type (e.g. Grant, Seed)" required class="p-2 border rounded">
                    <input type="text" name="country_region" placeholder="Region (e.g. Europe)" required class="p-2 border rounded">
                    <input type="date" name="deadline" required class="p-2 border rounded">
                    <input type="url" name="link" placeholder="External Link (Optional)" class="p-2 border rounded col-span-2">
                </div>
                <textarea name="description" placeholder="Short description details..." required class="w-full p-2 border rounded"></textarea>
                <button type="submit" class="w-full bg-emerald-600 text-white font-bold p-2 rounded hover:bg-emerald-700 transition">Create New Field Allocation</button>
            </form>

            <!-- List and Delete -->
            <div class="space-y-2 max-h-60 overflow-y-auto">
                @foreach($opportunities as $opp)
                <div class="p-3 bg-white border rounded-lg flex justify-between items-center text-xs">
                    <div>
                        <h5 class="font-bold text-gray-900">{{ $opp->title }}</h5>
                        <p class="text-gray-400 font-mono text-[10px]">{{ $opp->type }} · {{ $opp->country_region }}</p>
                    </div>
                    <form action="{{ route('admin.opportunities.delete', $opp->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Challenges CRUD Box -->
        <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-bold text-indigo-950">Manage Ecosystem Challenges</h3>
                <form method="GET" class="flex gap-2">
                    <input type="text" name="search_chal" value="{{ request('search_chal') }}" placeholder="Filter title..." class="px-2 py-1 text-xs border rounded-lg">
                    <button type="submit" class="bg-gray-100 text-xs px-2 rounded-lg">Go</button>
                </form>
            </div>

            <!-- Fast Quick-Add Form -->
            <form action="{{ route('admin.challenges.store') }}" method="POST" class="bg-gray-50 p-4 rounded-xl mb-4 text-xs space-y-2">
                @csrf
                <div class="grid grid-cols-2 gap-2">
                    <input type="text" name="title" placeholder="Challenge Bottleneck Title" required class="p-2 border rounded">
                    <input type="text" name="organization" placeholder="Organization" required class="p-2 border rounded">
                    <input type="text" name="sector" placeholder="Sector (e.g. Energy)" required class="p-2 border rounded">
                    <input type="date" name="deadline" required class="p-2 border rounded">
                </div>
                <textarea name="description" placeholder="Describe the corporate operational bottleneck..." required class="w-full p-2 border rounded"></textarea>
                <button type="submit" class="w-full bg-amber-600 text-white font-bold p-2 rounded hover:bg-amber-700 transition">Publish Active Challenge</button>
            </form>

            <!-- List and Delete -->
            <div class="space-y-2 max-h-60 overflow-y-auto">
                @foreach($challenges as $chal)
                <div class="p-3 bg-white border rounded-lg flex justify-between items-center text-xs">
                    <div>
                        <h5 class="font-bold text-gray-900">{{ $chal->title }}</h5>
                        <p class="text-gray-400 font-mono text-[10px]">{{ $chal->organization }} · {{ $chal->sector }}</p>
                    </div>
                    <form action="{{ route('admin.challenges.delete', $chal->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection