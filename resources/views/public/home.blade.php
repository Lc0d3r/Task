@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-indigo-800 to-indigo-950 text-white py-24 px-6 text-center">
    <h1 class="text-5xl font-extrabold mb-4 tracking-tight">Accelerating Ecosystem Innovation</h1>
    <p class="text-xl max-w-2xl mx-auto mb-8 text-indigo-200">
        EHOPn connects enterprise challenges, capital backing, and top academic research minds into a single unified workspace.
    </p>
    <div class="space-x-4">
        <a href="{{ route('contact') }}" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition">
            Get Started
        </a>
        <a href="{{ route('modules') }}" class="bg-transparent border border-white hover:bg-white hover:text-indigo-950 text-white font-bold py-3 px-6 rounded-lg transition">
            Explore Modules
        </a>
    </div>
</div>

<div class="max-w-6xl mx-auto py-16 px-4">
    <h2 class="text-3xl font-bold text-center text-indigo-950 mb-12">Why EHOPn?</h2>
    
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100">
            <h3 class="text-xl font-bold mb-3 text-indigo-900">Ecosystem Synergy</h3>
            <p class="text-gray-600">
                Break traditional structural bottlenecks by directly finding and collaborating with verified development partners.
            </p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100">
            <h3 class="text-xl font-bold mb-3 text-indigo-900">Direct Resource Matching</h3>
            <p class="text-gray-600">
                Apply for ongoing industry challenges, municipal micro-grants, and enterprise-backed incubation pathways instantly.
            </p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100">
            <h3 class="text-xl font-bold mb-3 text-indigo-900">Commercial Validation</h3>
            <p class="text-gray-600">
                Transition academic laboratory insights into real-world market prototypes with continuous tracking.
            </p>
        </div>
    </div>
</div>
@endsection