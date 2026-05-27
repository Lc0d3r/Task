@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-16 px-4">
    <div class="text-center mb-16">
        <h1 class="text-4xl font-extrabold text-indigo-950 mb-4">Platform Core Modules</h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Explore active ecosystem pathways. These modules connect operational challenges with active funding resources.
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-12">
        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <span class="p-3 bg-emerald-100 text-emerald-800 rounded-lg font-bold text-xl">💰</span>
                    <h2 class="text-2xl font-bold text-indigo-950">Opportunities Workspace</h2>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    View and apply for open innovation grants, public sector subsidies, specialized research calls, and venture capital allocations.
                </p>
                
                <div class="space-y-3 opacity-60">
                    <div class="p-3 bg-gray-50 rounded border border-gray-200 text-sm flex justify-between items-center">
                        <span>Green Energy Grant Call 2026</span>
                        <span class="bg-emerald-100 text-emerald-800 px-2 py-0.5 rounded text-xs">Active</span>
                    </div>
                    <div class="p-3 bg-gray-50 rounded border border-gray-200 text-sm flex justify-between items-center">
                        <span>Municipal Infrastructure Subsidy</span>
                        <span class="bg-emerald-100 text-emerald-800 px-2 py-0.5 rounded text-xs">Active</span>
                    </div>
                </div>
            </div>
            
            <div class="mt-8">
                <a href="#" class="inline-block w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 px-4 rounded transition">
                    Browse Opportunities (Coming Soon)
                </a>
            </div>
        </div>

        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <span class="p-3 bg-amber-100 text-amber-800 rounded-lg font-bold text-xl">🚀</span>
                    <h2 class="text-2xl font-bold text-indigo-950">Ecosystem Challenges</h2>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Explore active technical bottlenecks posted directly by enterprise operations, municipal bodies, and industrial manufacturing plants.
                </p>
                
                <div class="space-y-3 opacity-60">
                    <div class="p-3 bg-gray-50 rounded border border-gray-200 text-sm flex justify-between items-center">
                        <span>Optimizing PostgreSQL Indexing for IoT Data</span>
                        <span class="bg-amber-100 text-amber-800 px-2 py-0.5 rounded text-xs">Open</span>
                    </div>
                    <div class="p-3 bg-gray-50 rounded border border-gray-200 text-sm flex justify-between items-center">
                        <span>Decentralized Identity Verification Module</span>
                        <span class="bg-amber-100 text-amber-800 px-2 py-0.5 rounded text-xs">Open</span>
                    </div>
                </div>
            </div>
            
            <div class="mt-8">
                <a href="#" class="inline-block w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 px-4 rounded transition">
                    Browse Challenges (Coming Soon)
                </a>
            </div>
        </div>
    </div>
</div>
@endsection