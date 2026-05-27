@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-16 px-4">
    <!-- Header -->
    <div class="text-center mb-10">
        <h1 class="text-4xl font-extrabold text-indigo-950 mb-3">Join the EHOPn Network</h1>
        <p class="text-gray-600">Submit an application to register your organization, project, or enterprise needs.</p>
    </div>

    <!-- Success Flash Message Alert -->
    @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-lg shadow-sm flex items-center space-x-3">
            <span class="text-xl">✅</span>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Application Form Container -->
    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
        <!-- Action updated to hit our named route -->
        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
            
            <!-- Crucial Laravel Security Token -->
            @csrf
            
            <div class="grid sm:grid-cols-2 gap-6">
                <!-- Actor Type Selection -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">I am registering as a:</label>
                    <select name="type" class="w-full border border-gray-300 rounded-md p-2.5 bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:outline-none" required>
                        <option value="">-- Select Profile Type --</option>
                        <option value="Enterprise">Enterprise / Corporation</option>
                        <option value="Startup">Startup / Innovator</option>
                        <option value="Investor">Investor</option>
                        <option value="Researcher">Researcher / Academic</option>
                        <option value="Talent">Specialized Talent</option>
                        <option value="Supplier">Industrial Supplier</option>
                        <option value="Contact">General Inquiry</option>
                    </select>
                </div>

                <!-- Applicant Full Name -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name:</label>
                    <input type="text" name="name" class="w-full border border-gray-300 rounded-md p-2.5 bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="Alex Morgan" required>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-6">
                <!-- Contact Email -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Contact Email Address:</label>
                    <input type="email" name="email" class="w-full border border-gray-300 rounded-md p-2.5 bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="alex@organization.org" required>
                </div>

                <!-- Organization Name -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Organization / Institution Name:</label>
                    <input type="text" name="organization" class="w-full border border-gray-300 rounded-md p-2.5 bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="Tech Labs Inc." required>
                </div>
            </div>

            <!-- Statement of Intent / Message -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Brief Statement of Intent (What do you hope to achieve?):</label>
                <textarea name="message" rows="4" class="w-full border border-gray-300 rounded-md p-2.5 bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="Describe your primary technical goals or resource offerings..." required></textarea>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-md shadow transition focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Submit Platform Application
                </button>
            </div>
        </form>
    </div>
</div>
@endsection