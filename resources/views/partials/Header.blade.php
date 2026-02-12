<!-- Navbar -->
<nav id="navbar" class="fixed top-0 w-full z-50 py-6 bg-white/95 backdrop-blur-sm transition-all duration-300 shadow-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">
        
        <!-- Logo -->
        <div class="flex items-center">
            <img src="{{ asset('images/logo1.png') }}" alt="Logo" class="w-24 h-auto">
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-12">
            <a href="{{ url('/') }}" class="text-gray-700 font-medium hover:text-[#00057b]">Home</a>
            <a href="{{ url('/solution') }}" class="text-gray-700 font-medium hover:text-[#00057b]">Solutions</a>
            <a href="{{ url('/aboutus') }}" class="text-gray-700 font-medium hover:text-[#00057b]">About Us</a>
        </div>

        <!-- CTA Button -->
        <div class="hidden md:block">
            <a href="{{ url('/contact') }}" class="px-6 py-3 bg-[#ffc400] text-[#00057b] font-semibold rounded-lg hover:bg-[#ffcd1a] transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                Contact Us
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobileMenuButton" class="md:hidden w-10 h-10 flex items-center justify-center">
            <div class="flex flex-col gap-1.5">
                <span class="w-6 h-0.5 bg-[#00057b] transition-all duration-300"></span>
                <span class="w-6 h-0.5 bg-[#00057b] transition-all duration-300"></span>
                <span class="w-6 h-0.5 bg-[#00057b] transition-all duration-300"></span>
            </div>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden fixed top-[88px] left-0 w-full bg-white border-t border-gray-100 shadow-lg opacity-0 -translate-y-4 pointer-events-none transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col gap-4">
            <a href="{{ url('/') }}" class="block py-3 px-4 text-gray-700 font-medium hover:text-[#00057b] hover:bg-gray-50 rounded-lg">Home</a>
            <a href="{{ url('/solution') }}" class="block py-3 px-4 text-gray-700 font-medium hover:text-[#00057b] hover:bg-gray-50 rounded-lg">Solutions</a>
            <a href="{{ url('/aboutus') }}" class="block py-3 px-4 text-gray-700 font-medium hover:text-[#00057b] hover:bg-gray-50 rounded-lg">About Us</a>
            <a href="{{ url('/contact') }}" class="block py-3 px-4 text-center bg-[#ffc400] text-[#00057b] font-semibold rounded-lg">Contact Us</a>
        </div>
    </div>
</nav>
