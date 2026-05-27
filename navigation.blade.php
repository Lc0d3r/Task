<nav x-data="{ mobileMenuOpen: false }" class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="text-2xl font-bold text-indigo-600 tracking-tight">
                        Ehopn
                    </a>
                </div>

                <!-- Desktop Links (Hidden on mobile) -->
                <div class="hidden md:ml-10 md:flex md:space-x-8">
                    <a href="{{ route('challenges') }}" class="text-gray-600 hover:text-indigo-600 px-3 py-2 text-sm font-medium transition">
                        Challenges
                    </a>
                    <a href="{{ route('opportunities') }}" class="text-gray-600 hover:text-indigo-600 px-3 py-2 text-sm font-medium transition">
                        Opportunities
                    </a>
                    <a href="{{ route('modules') }}" class="text-gray-600 hover:text-indigo-600 px-3 py-2 text-sm font-medium transition">
                        Platform
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-600 hover:text-indigo-600 px-3 py-2 text-sm font-medium transition">
                        About
                    </a>
                </div>
            </div>

            <!-- Desktop CTA -->
            <div class="hidden md:flex items-center">
                <a href="{{ route('contact') }}" class="bg-indigo-600 text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-indigo-700 transition shadow-sm">
                    Join Hub
                </a>
            </div>

            <!-- Hamburger Button (Visible on mobile) -->
            <div class="flex items-center md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none transition">
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu Icon -->
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Close Icon -->
                    <svg x-show="mobileMenuOpen" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (Transitions in/out) -->
    <div 
        x-show="mobileMenuOpen" 
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="md:hidden bg-white border-t border-gray-100 shadow-lg"
        x-cloak
    >
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('challenges') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-gray-50">
                Challenges
            </a>
            <a href="{{ route('opportunities') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-gray-50">
                Opportunities
            </a>
            <a href="{{ route('modules') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-gray-50">
                Platform
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-gray-50">
                About
            </a>
            <div class="pt-4 pb-2 border-t border-gray-100 mt-2">
                <a href="{{ route('contact') }}" class="block w-full text-center bg-indigo-600 text-white px-4 py-2 rounded-md text-base font-semibold">
                    Join Innovation Hub
                </a>
            </div>
        </div>
    </div>
</nav>