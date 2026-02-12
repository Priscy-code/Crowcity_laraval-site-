@extends('layouts.app')

@section('title', 'Home - Innovation Redefined')

@section('content')
<!-- HERO SECTION -->
<section class="relative bg-[#00057b] min-h-[90vh] flex items-center overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute inset-0 opacity-10">
        <div 
            x-data="{ animate: false }"
            x-init="animate = true"
            :class="animate && 'hero-blob-1'"
            class="absolute top-20 right-20 w-96 h-96 bg-[#ffc400] rounded-full blur-3xl">
        </div>
        <div 
            x-data="{ animate: false }"
            x-init="animate = true"
            :class="animate && 'hero-blob-2'"
            class="absolute bottom-20 left-20 w-96 h-96 bg-white rounded-full blur-3xl">
        </div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-20 z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- TEXT CONTENT -->
            <div class="text-white"
                 x-data="{ show: false }"
                 x-intersect.once="show = true">
                
                <span 
                    x-show="show"
                    x-transition:enter="transition ease-out duration-800 delay-200"
                    x-transition:enter-start="opacity-0 translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full bg-[#ffc400]/10 border border-[#ffc400] text-[#ffc400] text-sm font-semibold backdrop-blur-sm">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    Technology & Innovation Leaders
                </span>

                <h1 
                    x-show="show"
                    x-transition:enter="transition ease-out duration-800 delay-300"
                    x-transition:enter-start="opacity-0 translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="text-5xl md:text-7xl font-bold leading-tight mb-6">
                    Innovation <span class="text-[#ffc400]">Redefined</span>
                </h1>

                <p 
                    x-show="show"
                    x-transition:enter="transition ease-out duration-800 delay-400"
                    x-transition:enter-start="opacity-0 translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="text-xl text-white/90 mb-8 max-w-xl leading-relaxed">
                    Empowering businesses with cutting-edge technology solutions that transform ideas into reality. From custom software to enterprise solutions.
                </p>

                <div 
                    x-show="show"
                    x-transition:enter="transition ease-out duration-800 delay-500"
                    x-transition:enter-start="opacity-0 translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="flex flex-wrap gap-4">
                    <a href="#contact" 
                       class="group px-8 py-4 rounded-full bg-[#ffc400] text-[#00057b] font-bold hover:bg-white transition-all shadow-lg hover:shadow-xl inline-flex items-center gap-2">
                        Get Started
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>

                    <a href="#features" 
                       class="px-8 py-4 rounded-full border-2 border-white text-white font-bold hover:bg-white hover:text-[#00057b] transition-all">
                        Learn More
                    </a>
                </div>

                <!-- Stats -->
                <div 
                    x-show="show"
                    x-transition:enter="transition ease-out duration-800 delay-600"
                    x-transition:enter-start="opacity-0 translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="mt-12 grid grid-cols-3 gap-6">
                    @foreach([
                        ['number' => '10+', 'label' => 'Years Experience'],
                        ['number' => '200+', 'label' => 'Projects Delivered'],
                        ['number' => '50+', 'label' => 'Happy Clients']
                    ] as $stat)
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#ffc400]">{{ $stat['number'] }}</div>
                        <div class="text-sm text-white/70">{{ $stat['label'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- IMAGE -->
            <div class="relative"
                 x-data="{ show: false }"
                 x-intersect.once="show = true">
                <div class="relative"
                     x-show="show"
                     x-transition:enter="transition ease-out duration-800 delay-200"
                     x-transition:enter-start="opacity-0 translate-x-12"
                     x-transition:enter-end="opacity-100 translate-x-0">
                    
                    <!-- Decorative elements -->
                    <div class="rotating-circle-1 absolute -top-8 -left-8 w-32 h-32 border-4 border-[#ffc400] rounded-full opacity-20"></div>
                    <div class="rotating-circle-2 absolute -bottom-8 -right-8 w-40 h-40 border-4 border-white rounded-full opacity-20"></div>

                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/laptop.jpg') }}" 
                             alt="Technology illustration" 
                             class="object-cover w-full h-auto" />
                        <div class="absolute inset-0 bg-gradient-to-t from-[#00057b]/50 to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="scroll-indicator absolute bottom-8 left-1/2 transform -translate-x-1/2">
        <svg class="w-6 h-6 text-[#ffc400]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg>
    </div>
</section>

<!-- ABOUT US PREVIEW SECTION -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center"
             x-data="{ show: false }"
             x-intersect.once="show = true">
            
            <!-- Image -->
            <div class="relative order-2 md:order-1"
                 x-show="show"
                 x-transition:enter="transition ease-out duration-800"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/mission.jpg') }}" 
                         alt="About CrownCity" 
                         class="object-cover w-full h-auto" />
                </div>
                
                <!-- Floating card -->
                <div 
                    x-show="show"
                    x-transition:enter="transition ease-out duration-800 delay-300"
                    x-transition:enter-start="opacity-0 scale-80"
                    x-transition:enter-end="opacity-100 scale-100"
                    class="absolute -bottom-6 -right-6 bg-[#ffc400] p-6 rounded-2xl shadow-xl">
                    <div class="text-[#00057b] font-bold text-4xl">10+</div>
                    <div class="text-[#00057b] font-semibold">Years of Excellence</div>
                </div>
            </div>

            <!-- Content -->
            <div class="order-1 md:order-2">
                <span 
                    x-show="show"
                    x-transition:enter="transition ease-out duration-800"
                    x-transition:enter-start="opacity-0 translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="inline-block mb-4 px-4 py-2 rounded-full bg-[#00057b]/10 text-[#00057b] text-sm font-semibold">
                    About Us
                </span>
                
                <h2 
                    x-show="show"
                    x-transition:enter="transition ease-out duration-800 delay-100"
                    x-transition:enter-start="opacity-0 translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="text-4xl md:text-5xl font-bold text-[#00057b] mb-6">
                    Leading Ghana's <span class="text-[#ffc400]">Tech Revolution</span>
                </h2>
                
                <p 
                    x-show="show"
                    x-transition:enter="transition ease-out duration-800 delay-200"
                    x-transition:enter-start="opacity-0 translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="text-lg text-gray-700 leading-relaxed mb-6">
                    Founded in December 2013, CrownCity Technologies Limited has established itself as a leading force in Ghana's technology sector. We deliver cutting-edge software development, AI-powered fintech platforms, and transformative enterprise solutions that drive measurable business growth across Africa and beyond.
                </p>
                
                <div 
                    x-show="show"
                    x-transition:enter="transition ease-out duration-800 delay-300"
                    x-transition:enter-start="opacity-0 translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="space-y-4 mb-8">
                    @foreach([
                        'Custom Software Development',
                        'Enterprise Solutions',
                        'AI-Powered Fintech Platforms',
                        'Digital Transformation'
                    ] as $item)
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 bg-[#ffc400] rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-[#00057b]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-gray-700 font-medium">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
                
                <a href="{{ route('about') }}" 
                   class="inline-flex items-center gap-2 px-6 py-3 bg-[#00057b] text-white rounded-full font-semibold hover:bg-black transition-colors">
                    Learn More About Us
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->
<section id="features" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16"
             x-data="{ show: false }"
             x-intersect.once="show = true">
            <span 
                x-show="show"
                x-transition:enter="transition ease-out duration-800"
                x-transition:enter-start="opacity-0 translate-y-5"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="inline-block mb-4 px-4 py-2 rounded-full bg-[#00057b]/10 text-[#00057b] text-sm font-semibold">
                Our Services
            </span>
            
            <h2 
                x-show="show"
                x-transition:enter="transition ease-out duration-800 delay-100"
                x-transition:enter-start="opacity-0 translate-y-5"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="text-4xl md:text-5xl font-bold text-[#00057b] mb-4">
                Comprehensive Technology <span class="text-[#ffc400]">Solutions</span>
            </h2>
            
            <p 
                x-show="show"
                x-transition:enter="transition ease-out duration-800 delay-200"
                x-transition:enter-start="opacity-0 translate-y-5"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="text-xl text-gray-600 max-w-3xl mx-auto">
                From ideation to deployment, we provide end-to-end technology services tailored to your business needs
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
            $services = [
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />',
                    'title' => 'Custom Software Development',
                    'description' => 'Tailored solutions built from the ground up to meet your unique business needs'
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />',
                    'title' => 'Enterprise Solutions',
                    'description' => 'Scalable systems designed to optimize workflows and drive efficiency'
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />',
                    'title' => 'IT Consulting',
                    'description' => 'Strategic guidance to optimize your technology investments and growth'
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />',
                    'title' => 'E-Commerce Platforms',
                    'description' => 'High-converting online stores and marketplaces that drive sales'
                ]
            ];
            @endphp

            @foreach($services as $index => $service)
            <div 
                x-data="{ show: false }"
                x-intersect.once="show = true"
                x-show="show"
                x-transition:enter="transition ease-out duration-800"
                x-transition:enter-start="opacity-0 translate-y-5"
                x-transition:enter-end="opacity-100 translate-y-0"
                style="transition-delay: {{ $index * 100 }}ms;"
                class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all cursor-pointer border-2 border-transparent hover:border-[#ffc400] hover:-translate-y-2">
                <div class="w-16 h-16 bg-[#00057b] group-hover:bg-[#ffc400] rounded-xl flex items-center justify-center text-[#ffc400] group-hover:text-[#00057b] mb-6 transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        {!! $service['icon'] !!}
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $service['title'] }}</h3>
                <p class="text-gray-600 leading-relaxed">{{ $service['description'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12"
             x-data="{ show: false }"
             x-intersect.once="show = true">
            <a 
                x-show="show"
                x-transition:enter="transition ease-out duration-800"
                x-transition:enter-start="opacity-0 translate-y-5"
                x-transition:enter-end="opacity-100 translate-y-0"
                href="{{ route('solutions') }}" 
                class="inline-flex items-center gap-2 px-8 py-4 bg-[#ffc400] text-[#00057b] rounded-full font-bold hover:bg-[#00057b] hover:text-white transition-colors shadow-lg">
                View All Solutions
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US SECTION -->
<section class="py-20 bg-[#00057b] text-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16"
             x-data="{ show: false }"
             x-intersect.once="show = true">
            <h2 
                x-show="show"
                x-transition:enter="transition ease-out duration-800"
                x-transition:enter-start="opacity-0 translate-y-5"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="text-4xl md:text-5xl font-bold mb-4">
                Why Choose <span class="text-[#ffc400]">CrownCity</span>
            </h2>
            <p 
                x-show="show"
                x-transition:enter="transition ease-out duration-800 delay-100"
                x-transition:enter-start="opacity-0 translate-y-5"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="text-xl text-white/80 max-w-3xl mx-auto">
                We combine local expertise with global standards to deliver exceptional results
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @php
            $reasons = [
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />',
                    'title' => 'Proven Track Record',
                    'description' => 'Over a decade of successful project delivery across diverse industries'
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
                    'title' => 'Innovation-Driven',
                    'description' => 'Constant exploration of emerging technologies to give you a competitive edge'
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />',
                    'title' => 'Client-Centric Approach',
                    'description' => 'We become true partners in your digital transformation journey'
                ]
            ];
            @endphp

            @foreach($reasons as $index => $item)
            <div 
                x-data="{ show: false }"
                x-intersect.once="show = true"
                x-show="show"
                x-transition:enter="transition ease-out duration-800"
                x-transition:enter-start="opacity-0 translate-y-5"
                x-transition:enter-end="opacity-100 translate-y-0"
                style="transition-delay: {{ $index * 100 }}ms;"
                class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all">
                <div class="w-16 h-16 bg-[#ffc400] rounded-xl flex items-center justify-center text-[#00057b] mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        {!! $item['icon'] !!}
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">{{ $item['title'] }}</h3>
                <p class="text-white/80 leading-relaxed">{{ $item['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- TECHNOLOGIES SECTION -->
<section class="py-20 bg-black text-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16"
             x-data="{ show: false }"
             x-intersect.once="show = true">
            <h2 
                x-show="show"
                x-transition:enter="transition ease-out duration-800"
                x-transition:enter-start="opacity-0 translate-y-5"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="text-4xl md:text-5xl font-bold mb-4">
                Technologies We <span class="text-[#ffc400]">Master</span>
            </h2>
            <p 
                x-show="show"
                x-transition:enter="transition ease-out duration-800 delay-100"
                x-transition:enter-start="opacity-0 translate-y-5"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="text-xl text-white/70">
                Leveraging cutting-edge tools and frameworks
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
            @foreach([
                'React', 'Node.js', 'Python', 'AWS', 'MongoDB', 'PostgreSQL',
                'Docker', 'TypeScript', 'Next.js', 'GraphQL', 'Kubernetes', 'AI/ML'
            ] as $index => $tech)
            <div 
                x-data="{ show: false }"
                x-intersect.once="show = true"
                x-show="show"
                x-transition:enter="transition ease-out duration-800"
                x-transition:enter-start="opacity-0 scale-80"
                x-transition:enter-end="opacity-100 scale-100"
                style="transition-delay: {{ $index * 50 }}ms;"
                class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 flex items-center justify-center hover:border-[#ffc400] hover:scale-110 transition-all">
                <span class="font-semibold text-center">{{ $tech }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section id="contact" class="py-20 bg-[#ffc400]">
    <div class="max-w-4xl mx-auto px-6 text-center"
         x-data="{ show: false }"
         x-intersect.once="show = true">
        <h2 
            x-show="show"
            x-transition:enter="transition ease-out duration-800"
            x-transition:enter-start="opacity-0 translate-y-5"
            x-transition:enter-end="opacity-100 translate-y-0"
            class="text-4xl md:text-6xl font-bold text-[#00057b] mb-6">
            Ready to Transform Your Business?
        </h2>
        <p 
            x-show="show"
            x-transition:enter="transition ease-out duration-800 delay-100"
            x-transition:enter-start="opacity-0 translate-y-5"
            x-transition:enter-end="opacity-100 translate-y-0"
            class="text-xl text-gray-800 mb-8 max-w-2xl mx-auto">
            Let's discuss how we can help you achieve your digital goals. Contact us today for a free consultation.
        </p>
        <a 
            x-show="show"
            x-transition:enter="transition ease-out duration-800 delay-200"
            x-transition:enter-start="opacity-0 translate-y-5"
            x-transition:enter-end="opacity-100 translate-y-0"
            href="{{ route('contact') }}"
            class="bg-[#00057b] text-white px-10 py-5 rounded-full text-lg font-bold hover:bg-black hover:scale-105 transition-all shadow-xl inline-flex items-center gap-3">
            Get Started Now
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
</section>
@endsection

@push('styles')
<style>
    /* Hero blob animations */
    @keyframes blob1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(50px, 30px) scale(1.2); }
        66% { transform: translate(-20px, 50px) scale(0.9); }
    }
    
    @keyframes blob2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(-30px, 50px) scale(1.1); }
        66% { transform: translate(40px, -20px) scale(0.95); }
    }
    
    .hero-blob-1 {
        animation: blob1 8s ease-in-out infinite;
    }
    
    .hero-blob-2 {
        animation: blob2 10s ease-in-out infinite;
    }
    
    /* Rotating circles */
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    @keyframes rotateReverse {
        from { transform: rotate(0deg); }
        to { transform: rotate(-360deg); }
    }
    
    .rotating-circle-1 {
        animation: rotate 20s linear infinite;
    }
    
    .rotating-circle-2 {
        animation: rotateReverse 15s linear infinite;
    }
    
    /* Scroll indicator */
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(10px); }
    }
    
    .scroll-indicator {
        animation: bounce 2s ease-in-out infinite;
    }
</style>
@endpush