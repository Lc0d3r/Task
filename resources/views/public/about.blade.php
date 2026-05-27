@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto pt-28 pb-16 px-4">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-indigo-950 mb-4">About the EHOPn Platform</h1>
        <p class="text-lg text-gray-600">Bridging the gap between groundbreaking ideas and market reality.</p>
    </div>

    <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 space-y-6 text-gray-700 leading-relaxed">
        <p>
            The **EHOPn Platform** (Ecosystem Hyper-collaboration and Open Innovation Network) serves as an infrastructure catalyst designed to eliminate communication silos between industry, academia, and startup ecosystems. 
        </p>

        <div class="grid sm:grid-cols-2 gap-8 my-8">
            <div>
                <h3 class="text-xl font-bold text-indigo-950 mb-2">Our Vision</h3>
                <p class="text-gray-600 text-sm">To be the global standard for industrial-academic hyper-collaboration, turning every complex problem into a structured opportunity for innovation.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold text-indigo-950 mb-2">Our Mission</h3>
                <p class="text-gray-600 text-sm">To provide a transparent, high-speed matching ecosystem where capital, challenges, and research talent converge to solve the world's technical bottlenecks.</p>
            </div>
        </div>

        <h3 class="text-xl font-bold text-indigo-950">The Problem We Solve</h3>
        <p>
            Too often, incredible research remains locked inside academic papers, while corporations struggle to find specialized talent or innovative answers to pressing technical challenges. EHOPn fixes this mismatch by giving all actors a centralized marketplace to post transparent goals, open funding opportunities, and evaluate strategic technical talent in real time.
        </p>

        <div class="border-l-4 border-indigo-600 pl-4 my-6 italic bg-indigo-50 py-2 pr-2 text-indigo-900 rounded-r">
            "Our ultimate goal is to accelerate the cycle of commercialization, making it simpler for institutional capital and innovative problems to discover their ideal technical matches."
        </div>

        <h3 class="text-xl font-bold text-indigo-950 pt-4">Who is it for?</h3>
        <ul class="list-disc pl-6 space-y-2">
            <li><strong>Enterprises:</strong> To publish hard technical bottlenecks as structured ecosystem challenges.</li>
            <li><strong>Researchers & Academics:</strong> To discover capital grants, research calls, and find commercial applications for their studies.</li>
            <li><strong>Startups & Innovators:</strong> To gain visibility, apply for strategic corporate pathways, and scale operations.</li>
        </ul>
    </div>
</div>
@endsection