<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHOPn Platform Prototype</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 flex flex-col min-h-screen">

    <nav class="bg-indigo-900 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-bold tracking-wide text-indigo-200">EHOPn</a>
            <div class="space-x-6">
                <a href="{{ route('home') }}" class="hover:text-indigo-300">Home</a>
                <a href="{{ route('about') }}" class="hover:text-indigo-300">About</a>
                <a href="{{ route('modules') }}" class="hover:text-indigo-300">Modules</a>
                <a href="{{ route('public.opportunities') }}" class="text-gray-700 hover:text-indigo-600 font-semibold text-sm transition px-3 py-2 rounded-lg">Opportunities</a>
                <a href="{{ route('contact') }}" class="bg-indigo-600 px-4 py-2 rounded text-white hover:bg-indigo-700">Join Platform</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-gray-400 py-6 text-center text-sm">
        &copy; {{ date('Y') }} EHOPn Platform Prototype. Built with speed.
    </footer>

</body>
</html>