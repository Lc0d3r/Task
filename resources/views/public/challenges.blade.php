@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto pt-28 pb-16 px-4">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-indigo-950 mb-4">Innovation Challenges</h1>
        <p class="text-lg text-gray-600">Explore technical bottlenecks and strategic problems posted by our industrial partners.</p>
    </div>

    <div class="grid sm:grid-cols-2 gap-8">
        @forelse($challenges as $challenge)
            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition">
                <div>
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-indigo-100 text-indigo-800 text-xs font-bold px-2.5 py-1 rounded uppercase tracking-wider">
                            {{ $challenge->sector }}
                        </span>
                        <span class="text-gray-500 text-xs font-medium italic">
                            Deadline: {{ \Carbon\Carbon::parse($challenge->deadline)->format('M d, Y') }}
                        </span>
                    </div>
                    <h2 class="text-2xl font-bold text-indigo-950 mb-2">{{ $challenge->title }}</h2>
                    <p class="text-gray-500 text-sm mb-4 font-semibold">{{ $challenge->organization }}</p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        {{ $challenge->description }}
                    </p>
                </div>
                
                <a href="{{ route('contact') }}" class="text-center bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-md transition">
                    Apply to Solve
                </a>
            </div>
        @empty
            <div class="col-span-2 py-20 text-center bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                <p class="text-gray-500 text-lg">No active challenges found at the moment. Please check back later.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection