{{-- Header/Navigation Component --}}
<header 
    x-data="{ 
        scrolled: false, 
        mobileMenuOpen: false,
        init() {
            window.addEventListener('scroll', () => {
                this.scrolled = window.scrollY > 20;
            });
        }
    }"
    :class="scrolled ? 'bg-white shadow-lg' : 'bg-white/95 backdrop-blur-sm'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    
    <nav class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo1.png') }}" 
                         alt="CrownCity Technologies Logo" 
                         class="h-20 w-auto object-contain transition-transform group-hover:scale-105" />
                </div>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" 
                   class="text-gray-700 hover:text-[#ffc400] font-medium transition-colors {{ request()->routeIs('home') ? 'text-[#ffc400]' : '' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" 
                   class="text-gray-700 hover:text-[#ffc400] font-medium transition-colors {{ request()->routeIs('about') ? 'text-[#ffc400]' : '' }}">
                    About Us
                </a>
                <a href="{{ route('solutions') }}" 
                   class="text-gray-700 hover:text-[#ffc400] font-medium transition-colors {{ request()->routeIs('solutions') ? 'text-[#ffc400]' : '' }}">
                    Solutions
                </a>
                
                <a href="{{ route('contact') }}" 
                   class="px-6 py-2.5 bg-[#00057b] text-white rounded-full font-semibold hover:bg-[#ffc400] hover:text-[#00057b] transition-all shadow-lg hover:shadow-xl">
                    Contact Us
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button 
                @click="mobileMenuOpen = !mobileMenuOpen"
                class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                <svg 
                    x-show="!mobileMenuOpen"
                    class="w-6 h-6 text-[#00057b]" 
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg 
                    x-show="mobileMenuOpen"
                    class="w-6 h-6 text-[#00057b]" 
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                    style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div 
            x-show="mobileMenuOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            @click.away="mobileMenuOpen = false"
            class="md:hidden mt-4 py-4 border-t border-gray-200"
            style="display: none;">
            <div class="flex flex-col gap-4">
                <a href="{{ route('home') }}" 
                   class="text-gray-700 hover:text-[#ffc400] font-medium transition-colors {{ request()->routeIs('home') ? 'text-[#ffc400]' : '' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" 
                   class="text-gray-700 hover:text-[#ffc400] font-medium transition-colors {{ request()->routeIs('about') ? 'text-[#ffc400]' : '' }}">
                    About Us
                </a>
                <a href="{{ route('solutions') }}" 
                   class="text-gray-700 hover:text-[#ffc400] font-medium transition-colors {{ request()->routeIs('solutions') ? 'text-[#ffc400]' : '' }}">
                    Solutions
                </a>
                
                <a href="{{ route('contact') }}" 
                   class="px-6 py-2.5 bg-[#00057b] text-white rounded-full font-semibold hover:bg-[#ffc400] hover:text-[#00057b] transition-all text-center">
                    Contact Us
                </a>
            </div>
        </div>
    </nav>
</header>