@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-16 px-4">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-indigo-950 mb-4">Funding & Opportunities</h1>
        <p class="text-lg text-gray-600">Discover grants, research calls, and investment programs to fuel your innovation.</p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($opportunities as $opportunity)
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition">
                <div>
                    <div class="flex justify-between items-center mb-4">
                        <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-2.5 py-1 rounded uppercase">
                            {{ $opportunity->type }}
                        </span>
                        <span class="text-gray-400 text-xs font-medium">
                            {{ $opportunity->country_region }}
                        </span>
                    </div>
                    <h2 class="text-xl font-bold text-indigo-950 mb-3">{{ $opportunity->title }}</h2>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 line-clamp-4">
                        {{ $opportunity->description }}
                    </p>
                </div>
                
                <div class="space-y-3">
                    <div class="flex justify-between text-xs text-gray-500 mb-4">
                        <span>Deadline:</span>
                        <span class="font-bold">{{ \Carbon\Carbon::parse($opportunity->deadline)->format('M d, Y') }}</span>
                    </div>
                    @if($opportunity->link)
                        <a href="{{ $opportunity->link }}" target="_blank" class="block text-center w-full border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-50 font-bold py-2 rounded-md transition mb-2">
                            External Details
                        </a>
                    @endif
                    <a href="{{ route('contact') }}" class="block text-center w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 rounded-md transition">
                        Apply Now
                    </a>
                </div>
            </div>
        @empty
            <div class="col-span-full py-20 text-center bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                <p class="text-gray-500 text-lg">No active opportunities found at the moment.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection