@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-16 px-4">
    <!-- Header -->
    <div class="text-center mb-10">
        <h1 class="text-4xl font-extrabold text-indigo-950 mb-3">Join the EHOPn Network</h1>
        <p class="text-gray-600">Submit an application to register your organization, project, or enterprise needs.</p>
    </div>

    <!-- Application Form Container -->
    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
        <form action="#" method="POST" class="space-y-6">
            <!-- CSRF Token Placeholder (We will activate this soon) -->
            
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Actor Type Selection -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">I am registering as a:</label>
                    <select name="type" class="w-full border border-gray-300 rounded-md p-2.5 bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:outline-none" required>
                        <option value="">-- Select Profile Type --</option>
                        <option value="Enterprise">Enterprise / Corporation</option>
                        <option value="Academic">Academic Researcher / Lab</option>
                        <option value="Startup">Startup / Innovator</option>
                    </select>
                </div>

                <!-- Applicant Full Name -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name:</label>
                    <input type="text" name="name" class="w-full border border-gray-300 rounded-md p-2.5 bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="Alex Morgan" required>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
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