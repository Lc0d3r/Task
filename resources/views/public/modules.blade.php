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