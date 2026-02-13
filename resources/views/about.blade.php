@extends('layouts.app')

@section('title', 'About Us - CrownCity Technologies')

@section('content')
<!-- HERO SECTION -->
<section class="relative bg-[#00057b] text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#ffc400] rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-white rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-24 md:py-32">
        <div class="text-center"
             x-data="{ show: true }"
             x-init="setTimeout(() => show = true, 100)">
            <h1 
                x-show="show"
                x-transition:enter="transition ease-out duration-600"
                x-transition:enter-start="opacity-0 translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="text-5xl md:text-7xl font-bold mb-6">
                About <span class="text-[#ffc400]">CrownCity</span>
            </h1>
            <p 
                x-show="show"
                x-transition:enter="transition ease-out duration-600 delay-150"
                x-transition:enter-start="opacity-0 translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto">
                Empowering Businesses Through Innovative Technology Solutions
            </p>
        </div>
    </div>
</section>

<!-- INTRO SECTION WITH IMAGE -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center"
             x-data="{ show: true }"
             x-intersect.once="show = true">
            <div x-show="show"
                 x-transition:enter="transition ease-out duration-600"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="space-y-6">
                <h2 class="text-4xl md:text-5xl font-bold text-[#00057b]">
                    Who We Are
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Founded in <span class="font-semibold text-[#00057b]">December 2013</span>, CrownCity Technologies Limited has established itself as a leading force in Ghana's technology sector. We deliver cutting-edge software development, AI-powered fintech platforms, and transformative enterprise solutions that drive measurable business growth across Africa and beyond.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Our expertise lies in crafting <span class="font-semibold text-[#00057b]">scalable, secure, and user-centric</span> technology solutions that fundamentally transform how businesses operate, engage customers, and compete in today's rapidly evolving digital economy.
                </p>
            </div>

            <div x-show="show"
                 x-transition:enter="transition ease-out duration-600 delay-150"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="relative h-[400px] md:h-[500px] rounded-2xl overflow-hidden shadow-2xl">
                <div class="absolute inset-0 bg-gradient-to-br from-[#00057b] to-[#ffc400] opacity-20"></div>
                <img src="{{ asset('images/logo1.png') }}" 
                     alt="CrownCity Technologies" 
                     class="w-full h-full object-contain p-8" />
            </div>
        </div>
    </div>
</section>

<!-- MISSION & VISION -->
<section class="py-20 bg-black text-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16"
            x-data="{ show: true }"
            x-intersect.once="show = true"
            x-show="show"
            x-transition:enter="transition ease-out duration-600"
            x-transition:enter-start="opacity-0 translate-y-5"
            x-transition:enter-end="opacity-100 translate-y-0">
            Our <span class="text-[#ffc400]">Purpose</span>
        </h2>

        <div class="grid md:grid-cols-2 gap-8"
             x-data="{ show: true }"
             x-intersect.once="show = true">
            <!-- Mission Card -->
            <div x-show="show"
                 x-transition:enter="transition ease-out duration-500"
                 x-transition:enter-start="opacity-0 translate-y-5"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="relative group">
                <div class="absolute inset-0 bg-gradient-to-br from-[#ffc400] to-[#00057b] rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8 hover:border-[#ffc400] transition-all hover:-translate-y-2">
                    <div class="w-16 h-16 bg-[#ffc400] rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#00057b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold mb-4 text-[#ffc400]">Our Mission</h3>
                    <p class="text-white/90 leading-relaxed text-lg">
                        To leverage cutting-edge technology to help organizations increase revenue, streamline complex processes, and achieve sustainable, long-term growth. We believe every business deserves access to world-class technology that unlocks new opportunities.
                    </p>
                </div>
            </div>

            <!-- Vision Card -->
            <div x-show="show"
                 x-transition:enter="transition ease-out duration-500 delay-100"
                 x-transition:enter-start="opacity-0 translate-y-5"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="relative group">
                <div class="absolute inset-0 bg-gradient-to-br from-[#00057b] to-[#ffc400] rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8 hover:border-[#ffc400] transition-all hover:-translate-y-2">
                    <div class="w-16 h-16 bg-[#00057b] rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#ffc400]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold mb-4 text-[#ffc400]">Our Vision</h3>
                    <p class="text-white/90 leading-relaxed text-lg">
                        We envision a future where technology serves as the great equalizer — removing barriers, creating opportunities, and empowering businesses to reach their full potential. This vision drives every solution we deliver.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FINANCIAL INCLUSION -->
<section class="py-20 bg-[#ffc400]">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center"
             x-data="{ show: true }"
             x-intersect.once="show = true">
            <div x-show="show"
                 x-transition:enter="transition ease-out duration-600"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="order-2 md:order-1">
                <div class="relative h-[400px] rounded-2xl overflow-hidden shadow-2xl bg-white">
                    <img src="{{ asset('images/financial-crisis.jpg') }}" 
                         alt="Financial Inclusion" 
                         class="w-full h-full object-cover" />
                </div>
            </div>

            <div x-show="show"
                 x-transition:enter="transition ease-out duration-600 delay-150"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="order-1 md:order-2 space-y-6">
                <div class="inline-block p-3 bg-[#00057b] rounded-xl mb-4">
                    <svg class="w-10 h-10 text-[#ffc400]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-[#00057b]">
                    Financial Inclusion Through Technology
                </h2>
                <p class="text-lg text-gray-800 leading-relaxed">
                    Beyond commercial success, we are deeply committed to creating social impact through financial technology. Our proprietary AI-powered fintech platforms are breaking down barriers to financial services across underserved markets.
                </p>
                <p class="text-lg text-gray-800 leading-relaxed">
                    We connect individuals historically excluded from traditional banking systems with regulated financial institutions, ensuring access to affordable, convenient, and secure financial products.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div x-data="{ show: true }"
             x-intersect.once="show = true">
            <h2 x-show="show"
                x-transition:enter="transition ease-out duration-600"
                x-transition:enter-start="opacity-0 translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="text-4xl md:text-5xl font-bold mb-4 text-center text-[#00057b]">
                Why Choose <span class="text-[#ffc400]">CrownCity</span>
            </h2>
            <p x-show="show"
               x-transition:enter="transition ease-out duration-600 delay-100"
               x-transition:enter-start="opacity-0 translate-y-8"
               x-transition:enter-end="opacity-100 translate-y-0"
               class="text-center text-gray-600 text-lg mb-16 max-w-3xl mx-auto">
                We combine local expertise with global standards to deliver exceptional results
            </p>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                $reasons = [
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />',
                        'title' => 'Proven Track Record',
                        'text' => 'Over a decade of successful project delivery across diverse industries.'
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />',
                        'title' => 'Local Expertise, Global Standards',
                        'text' => 'Deep understanding of African markets combined with international best practices.'
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
                        'title' => 'Innovation-Driven',
                        'text' => 'Constant exploration of emerging technologies to give clients a competitive edge.'
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />',
                        'title' => 'Client-Centric',
                        'text' => 'We become true partners in your digital transformation journey.'
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />',
                        'title' => 'End-to-End Support',
                        'text' => 'From consultation to deployment and ongoing maintenance.'
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />',
                        'title' => 'Security First',
                        'text' => 'Enterprise-grade security measures protecting your data and operations.'
                    ]
                ];
                @endphp

                @foreach($reasons as $index => $item)
                <div x-show="show"
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 translate-y-5"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     style="transition-delay: {{ $index * 100 }}ms;"
                     class="group relative bg-white border-2 border-gray-100 rounded-xl p-8 hover:border-[#ffc400] transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="w-14 h-14 bg-[#00057b] group-hover:bg-[#ffc400] rounded-lg flex items-center justify-center mb-4 transition-colors duration-300">
                        <svg class="w-7 h-7 text-[#ffc400] group-hover:text-[#00057b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            {!! $item['icon'] !!}
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-[#00057b]">{{ $item['title'] }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $item['text'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section id="contact" class="py-20 bg-[#ffc400]">
    <div class="max-w-4xl mx-auto px-6 text-center"
         x-data="{ show: true }"
         x-intersect.once="show = true">
        <h2 x-show="show"
            x-transition:enter="transition ease-out duration-600"
            x-transition:enter-start="opacity-0 translate-y-5"
            x-transition:enter-end="opacity-100 translate-y-0"
            class="text-4xl md:text-6xl font-bold text-[#00057b] mb-6">
            Ready to Transform Your Business?
        </h2>
        <p x-show="show"
           x-transition:enter="transition ease-out duration-600 delay-100"
           x-transition:enter-start="opacity-0 translate-y-5"
           x-transition:enter-end="opacity-100 translate-y-0"
           class="text-xl text-gray-800 mb-8 max-w-2xl mx-auto">
            Let's discuss how we can help you achieve your digital goals. Contact us today for a free consultation.
        </p>
        <a x-show="show"
           x-transition:enter="transition ease-out duration-600 delay-200"
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