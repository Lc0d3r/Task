@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-16 px-4">
    <div class="text-center mb-16">
        <h1 class="text-4xl font-extrabold text-indigo-950 mb-4">Platform Core Modules</h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Explore active ecosystem pathways. These modules connect operational challenges with active funding resources.
        </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        {{-- 1. AI Matchmaking --}}
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <span class="text-3xl mb-4 block">🤖</span>
            <h3 class="text-xl font-bold text-indigo-950 mb-2">AI Matchmaking</h3>
            <p class="text-gray-600 text-sm">Smart alignment of startup solutions with industrial technical requirements.</p>
        </div>

        {{-- 2. Innovation Challenges (Dynamic Data) --}}
        <div class="bg-white p-6 rounded-xl shadow-sm border border-indigo-200 ring-2 ring-indigo-50">
            <span class="text-3xl mb-4 block">🚀</span>
            <h3 class="text-xl font-bold text-indigo-950 mb-2">Innovation Challenges</h3>
            <p class="text-gray-600 text-sm mb-4">Active technical bottlenecks posted by enterprise operations.</p>
            <div class="space-y-2 mb-4">
                @foreach($challenges->take(2) as $challenge)
                    <div class="text-xs bg-gray-50 p-2 rounded border">{{ $challenge->title }}</div>
                @endforeach
            </div>
            <a href="{{ route('public.challenges') }}" class="text-indigo-600 font-bold text-sm hover:underline">View All Challenges →</a>
        </div>

        {{-- 3. Collaboration Workspace --}}
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <span class="text-3xl mb-4 block">🤝</span>
            <h3 class="text-xl font-bold text-indigo-950 mb-2">Collaboration Workspace</h3>
            <p class="text-gray-600 text-sm">Shared environment for pilot project management and data exchange.</p>
        </div>

        {{-- 4. Talent Ecosystem --}}
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <span class="text-3xl mb-4 block">🎓</span>
            <h3 class="text-xl font-bold text-indigo-950 mb-2">Talent Ecosystem</h3>
            <p class="text-gray-600 text-sm">Connecting specialized researchers and engineering talent with high-growth ventures.</p>
        </div>

        {{-- 5. Research Commercialization --}}
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <span class="text-3xl mb-4 block">🔬</span>
            <h3 class="text-xl font-bold text-indigo-950 mb-2">Research Commercialization</h3>
            <p class="text-gray-600 text-sm">Transferring academic IP into viable industrial products and startups.</p>
        </div>

        {{-- 6. Supplier Marketplace --}}
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <span class="text-3xl mb-4 block">🏭</span>
            <h3 class="text-xl font-bold text-indigo-950 mb-2">Supplier Marketplace</h3>
            <p class="text-gray-600 text-sm">Verified directory of innovation-friendly industrial suppliers and vendors.</p>
        </div>

        {{-- 7. Events / MunichTech EXPO --}}
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <span class="text-3xl mb-4 block">📅</span>
            <h3 class="text-xl font-bold text-indigo-950 mb-2">MunichTech EXPO</h3>
            <p class="text-gray-600 text-sm">Integration with flagship events for networking and live demo showcases.</p>
        </div>

        {{-- 8. Funding & Intelligence (Dynamic Data) --}}
        <div class="bg-white p-6 rounded-xl shadow-sm border border-emerald-200 ring-2 ring-emerald-50">
            <span class="text-3xl mb-4 block">💰</span>
            <h3 class="text-xl font-bold text-indigo-950 mb-2">Innovation Intelligence</h3>
            <p class="text-gray-600 text-sm mb-4">Grants, subsidies, and investment calls for deep-tech ventures.</p>
            <div class="space-y-2 mb-4">
                @foreach($opportunities->take(2) as $opportunity)
                    <div class="text-xs bg-gray-50 p-2 rounded border">{{ $opportunity->title }}</div>
                @endforeach
            </div>
            <a href="{{ route('public.opportunities') }}" class="text-emerald-600 font-bold text-sm hover:underline">View All Funding →</a>
        </div>
    </div>
</div>
@endsection

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
                <a href="{{ route('public.challenges') }}" class="inline-block w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 px-4 rounded transition">
                    Browse All Challenges
                </a>
            </div>
        </div>
    </div>
</div>
@endsection