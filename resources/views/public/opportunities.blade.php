@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-black text-indigo-950 sm:text-5xl">Ecosystem Opportunities</h1>
        <p class="mt-3 max-w-2xl mx-auto text-lg text-gray-600">
            Explore funding options, grants, research calls, and exclusive corporate startup programs.
        </p>
    </div>

    <div class="grid gap-8 md:grid-cols-2">
        @forelse($opportunities as $opp)
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-between hover:shadow-md transition">
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 uppercase tracking-wider">
                            {{ $opp->type }}
                        </span>
                        <span class="text-xs text-gray-400 font-medium flex items-center gap-1">📍 {{ $opp->country_region }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-indigo-950 mb-2">{{ $opp->title }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">{{ $opp->description }}</p>
                </div>
                <div class="border-t border-gray-100 pt-4 flex items-center justify-between text-xs text-gray-500">
                    <span>⏰ Application Deadline: <strong class="text-gray-700">{{ \Carbon\Carbon::parse($opp->deadline)->format('M d, Y') }}</strong></span>
                    <span class="px-2 py-0.5 bg-gray-100 rounded text-gray-600 text-[10px] font-mono font-bold uppercase">{{ $opp->status }}</span>
                </div>
            </div>
        @empty
            <div class="col-span-2 text-center py-12 bg-white rounded-xl border border-dashed border-gray-200 text-gray-400">
                No active opportunities listed at the moment. Check back soon!
            </div>
        @endforelse
    </div>
</div>
@endsection