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
                
                <div class="space-y-3">
                    @forelse($opportunities as $opportunity)
                        <div class="p-4 bg-gray-50 rounded-lg border border-gray-200 text-sm flex justify-between items-start shadow-sm">
                            <div>
                                <h4 class="font-bold text-indigo-950 mb-1">{{ $opportunity->title }}</h4>
                                <p class="text-gray-600 text-xs line-clamp-2">{{ $opportunity->description }}</p>
                            </div>
                            <span class="bg-emerald-100 text-emerald-800 px-2.5 py-1 rounded-full text-xs font-semibold whitespace-nowrap ml-2">
                                {{ $opportunity->status ?? 'Active' }}
                            </span>
                        </div>
                    @empty
                        <div class="p-4 text-center border border-dashed border-gray-200 rounded-lg text-gray-400 text-sm">
                            No active opportunities available at the moment.
                        </div>
                    @endforelse
                </div>
            </div>
            
            <div class="mt-8">
                <a href="#" class="inline-block w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 px-4 rounded transition">
                    Browse All Opportunities
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
                
                <div class="space-y-3">
                    @forelse($challenges as $challenge)
                        <div class="p-4 bg-gray-50 rounded-lg border border-gray-200 text-sm flex justify-between items-start shadow-sm">
                            <div>
                                <h4 class="font-bold text-indigo-950 mb-1">{{ $challenge->title }}</h4>
                                <p class="text-gray-600 text-xs line-clamp-2">{{ $challenge->description }}</p>
                            </div>
                            <span class="bg-amber-100 text-amber-800 px-2.5 py-1 rounded-full text-xs font-semibold whitespace-nowrap ml-2">
                                {{ $challenge->status ?? 'Open' }}
                            </span>
                        </div>
                    @empty
                        <div class="p-4 text-center border border-dashed border-gray-200 rounded-lg text-gray-400 text-sm">
                            No active ecosystem challenges available at the moment.
                        </div>
                    @endforelse
                </div>
            </div>
            
            <div class="mt-8">
                <a href="#" class="inline-block w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 px-4 rounded transition">
                    Browse All Challenges
                </a>
            </div>
        </div>
    </div>
</div>
@endsection