<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHOPn Platform Prototype</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for Responsive Interactivity -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-900 flex flex-col min-h-screen">
    
    @include('navigation')

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-gray-400 py-6 text-center text-sm">
        &copy; {{ date('Y') }} EHOPn Platform Prototype. Built with speed.
    </footer>

</body>
</html>