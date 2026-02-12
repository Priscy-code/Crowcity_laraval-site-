<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CrownCity Technologies - @yield('title', 'Empowering Businesses Through Technology')</title>
    
    <meta name="description" content="CrownCity Technologies Limited - Leading Ghana's tech revolution with cutting-edge software development, AI-powered fintech platforms, and enterprise solutions.">
    <meta name="keywords" content="software development, enterprise solutions, IT consulting, e-commerce, fintech, Ghana, technology">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (CDN for development - replace with compiled CSS in production) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'crown-blue': '#00057b',
                        'crown-gold': '#ffc400',
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('styles')
    
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="antialiased bg-white font-sans">
    
    <!-- Header/Navigation -->
    @include('partials.header')

    <!-- Main Content -->
    <main class="pt-[88px]">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    @stack('scripts')
</body>
</html>