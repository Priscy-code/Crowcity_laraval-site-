@extends('layouts.app')

@section('title', 'Solutions - CrownCity Technologies')

@php
$services = [
    [
        'id' => 0,
        'title' => 'Custom Software Development',
        'image' => 'images/computer-8779040_1280.jpg',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />',
        'description' => 'Transform your innovative business ideas into powerful digital realities with our full-cycle custom software development services. We build scalable, secure, and user-centric solutions that drive business growth.',
        'features' => [
            '100% Customer Satisfaction Guarantee',
            'Agile Development Methodology',
            'Security-First Architecture',
            'Transparent Communication',
            'Cost-Effective Excellence',
            'Future-Proof Solutions'
        ],
        'capabilities' => [
            [
                'name' => 'Web Application Development',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />',
                'items' => [
                    'Progressive Web Apps (PWAs)',
                    'Single Page Applications (SPAs)',
                    'Custom Web Portals',
                    'API Development & Integration',
                    'Real-Time Web Applications'
                ]
            ],
            [
                'name' => 'Mobile App Development',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />',
                'items' => [
                    'Native iOS Development',
                    'Native Android Development',
                    'Cross-Platform Development',
                    'Mobile Backend Services',
                    'App Store Optimization'
                ]
            ],
            [
                'name' => 'UI/UX Design Services',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />',
                'items' => [
                    'User Research & Analysis',
                    'Wireframing & Prototyping',
                    'Visual Design',
                    'Usability Testing',
                    'Accessibility Compliance'
                ]
            ],
            [
                'name' => 'MVP Development',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
                'items' => [
                    'Rapid Prototyping',
                    'Core Feature Focus',
                    'Market Testing Support',
                    'Scalable Architecture',
                    'Investor-Ready Demos'
                ]
            ]
        ]
    ],
    [
        'id' => 1,
        'title' => 'Enterprise Software Solutions',
        'image' => 'images/technology.jpg',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />',
        'description' => 'Navigate complex organizational challenges with enterprise-grade software solutions designed to optimize workflows and drive measurable efficiency. We help large organizations modernize their technology infrastructure.',
        'features' => [
            'Process Optimization',
            'Workflow Automation',
            'Legacy System Modernization',
            'Compliance Management',
            'Enterprise Integration',
            'Scalable Architecture'
        ],
        'capabilities' => [
            [
                'name' => 'Business Process Management',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />',
                'items' => [
                    'Process Mapping & Analysis',
                    'Workflow Automation',
                    'Document Management',
                    'Performance Monitoring',
                    'Compliance Management'
                ]
            ],
            [
                'name' => 'Production Automation',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />',
                'items' => [
                    'Manufacturing Execution Systems',
                    'Supply Chain Optimization',
                    'Quality Assurance Systems',
                    'Predictive Maintenance',
                    'Resource Planning'
                ]
            ],
            [
                'name' => 'Advanced Technology Integration',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />',
                'items' => [
                    'AI & Machine Learning',
                    'Robotic Process Automation',
                    'Blockchain Solutions',
                    'Advanced Analytics',
                    'Digital Twin Technology'
                ]
            ],
            [
                'name' => 'Legacy System Modernization',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />',
                'items' => [
                    'Assessment & Strategy',
                    'Gradual Migration',
                    'API Integration',
                    'Data Migration',
                    'Training & Support'
                ]
            ]
        ]
    ],
    [
        'id' => 2,
        'title' => 'IT Consulting & Strategy',
        'image' => 'images/consulting.jpg',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />',
        'description' => 'Navigate your digital transformation journey with strategic guidance that optimizes technology investments and accelerates sustainable growth. We help you make informed decisions about your technology stack.',
        'features' => [
            'Strategic Planning',
            'Technology Assessment',
            'Digital Transformation',
            'Budget Optimization',
            'Risk Management',
            'Vendor Selection'
        ],
        'capabilities' => [
            [
                'name' => 'Technology Strategy & Roadmapping',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />',
                'items' => [
                    'IT Assessment',
                    'Strategic Planning',
                    'Digital Transformation',
                    'Technology Selection',
                    'Budget Optimization'
                ]
            ],
            [
                'name' => 'System Integration Services',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />',
                'items' => [
                    'Enterprise Application Integration',
                    'Middleware Solutions',
                    'Service-Oriented Architecture',
                    'API Management',
                    'Data Synchronization'
                ]
            ],
            [
                'name' => 'Data Analytics & Business Intelligence',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />',
                'items' => [
                    'Data Warehouse Design',
                    'BI Platforms',
                    'Predictive Analytics',
                    'Data Governance',
                    'Self-Service Analytics'
                ]
            ],
            [
                'name' => 'Cloud Computing Services',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />',
                'items' => [
                    'Cloud Strategy',
                    'Cloud Migration',
                    'Cloud-Native Development',
                    'Cloud Optimization',
                    'Cloud Security'
                ]
            ]
        ]
    ],
    [
        'id' => 3,
        'title' => 'E-Commerce & Marketplace Platforms',
        'image' => 'images/e-commerce.jpg',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />',
        'description' => 'Launch and scale your online marketplace with high-performing, conversion-optimized platforms that attract traffic and convert visitors into loyal customers. Build your digital storefront with us.',
        'features' => [
            'SEO-Optimized Architecture',
            'Conversion-Focused Design',
            'Multiple Payment Gateways',
            'Advanced Security (PCI-DSS)',
            'Marketing & Growth Tools',
            'Comprehensive Analytics'
        ],
        'capabilities' => [
            [
                'name' => 'B2B Marketplace Platforms',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />',
                'items' => [
                    'Vertical B2B Marketplaces',
                    'Horizontal B2B Marketplaces',
                    'Procurement Platforms',
                    'Bulk Order Management',
                    'Advanced Analytics'
                ]
            ],
            [
                'name' => 'B2C E-Commerce Solutions',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />',
                'items' => [
                    'Product Catalog Management',
                    'Personalization Engine',
                    'Advanced Search & Filtering',
                    'Shopping Cart Optimization',
                    'Loyalty Programs'
                ]
            ],
            [
                'name' => 'C2C Marketplace Development',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />',
                'items' => [
                    'Seller Onboarding',
                    'Listing Management',
                    'Secure Escrow Services',
                    'Rating & Review Systems',
                    'Dispute Resolution'
                ]
            ],
            [
                'name' => 'Multi-Vendor Platforms',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />',
                'items' => [
                    'Vendor Management',
                    'Individual Storefronts',
                    'Unified Shopping Cart',
                    'Commission & Revenue Splits',
                    'Vendor Analytics'
                ]
            ]
        ]
    ]
];
@endphp

@section('content')
<div x-data="solutionsPage()">
    <!-- HERO SECTION -->
    <section class="relative bg-[#00057b] text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="hero-blob-1 absolute top-0 right-0 w-[600px] h-[600px] bg-[#ffc400] rounded-full blur-3xl"></div>
            <div class="hero-blob-2 absolute bottom-0 left-0 w-[500px] h-[500px] bg-white rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-24 md:py-32">
            <div class="text-center"
                 x-data="{ show: true }"
                 x-init="setTimeout(() => show = true, 100)">
                <div x-show="show"
                     x-transition:enter="transition ease-out duration-500 delay-200"
                     x-transition:enter-start="opacity-0 scale-0"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="inline-block mb-6">
                    <div class="w-20 h-20 bg-[#ffc400] rounded-2xl mx-auto flex items-center justify-center">
                        <svg class="w-10 h-10 text-[#00057b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                </div>
                <h1 x-show="show"
                    x-transition:enter="transition ease-out duration-800"
                    x-transition:enter-start="opacity-0 translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="text-5xl md:text-7xl font-bold mb-6">
                    Our <span class="text-[#ffc400]">Solutions</span>
                </h1>
                <p x-show="show"
                   x-transition:enter="transition ease-out duration-800 delay-100"
                   x-transition:enter-start="opacity-0 translate-y-5"
                   x-transition:enter-end="opacity-100 translate-y-0"
                   class="text-xl md:text-2xl text-white/90 max-w-4xl mx-auto">
                    Comprehensive technology services designed to address every aspect of your digital transformation journey
                </p>
            </div>
        </div>
    </section>

    <!-- SERVICE CARDS GRID -->
    <section id="service-cards" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16"
                 x-data="{ show: true }"
                 x-intersect.once="show = true">
                @foreach($services as $index => $service)
                <button @click="activeService = {{ $index }}"
                        x-show="show"
                        x-transition:enter="transition ease-out duration-600"
                        x-transition:enter-start="opacity-0 translate-y-5"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        style="transition-delay: {{ $index * 100 }}ms;"
                        :class="activeService === {{ $index }} ? 'bg-[#00057b] text-white shadow-2xl' : 'bg-white text-gray-800 shadow-lg hover:shadow-xl'"
                        class="relative p-6 rounded-2xl text-left transition-all duration-300 group hover:-translate-y-1">
                    <div :class="activeService === {{ $index }} ? 'bg-[#ffc400] text-[#00057b]' : 'bg-[#00057b] text-[#ffc400]'"
                         class="w-14 h-14 rounded-xl mb-4 flex items-center justify-center transition-colors">
                        <svg class="w-full h-full p-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            {!! $service['icon'] !!}
                        </svg>
                    </div>
                    <h3 :class="activeService === {{ $index }} ? 'text-white' : 'text-gray-900'"
                        class="text-lg font-bold">
                        {{ $service['title'] }}
                    </h3>
                    <div x-show="activeService === {{ $index }}"
                         class="absolute bottom-0 left-0 right-0 h-1 bg-[#ffc400]"></div>
                </button>
                @endforeach
            </div>

            <!-- ACTIVE SERVICE CONTENT -->
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden"
                 x-show="true"
                 x-transition:enter="transition ease-out duration-500"
                 x-transition:enter-start="opacity-0 translate-y-5"
                 x-transition:enter-end="opacity-100 translate-y-0">
                @foreach($services as $index => $service)
                <div x-show="activeService === {{ $index }}"
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 translate-y-5"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <!-- Service Header with Image -->
                    <div class="grid md:grid-cols-2 gap-8 p-8 md:p-12">
                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 bg-[#00057b] rounded-xl flex items-center justify-center text-[#ffc400]">
                                    <svg class="w-full h-full p-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        {!! $service['icon'] !!}
                                    </svg>
                                </div>
                                <h2 class="text-3xl md:text-4xl font-bold text-[#00057b]">
                                    {{ $service['title'] }}
                                </h2>
                            </div>
                            <p class="text-lg text-gray-700 leading-relaxed">
                                {{ $service['description'] }}
                            </p>

                            <!-- Key Features -->
                            <div class="pt-4">
                                <h3 class="text-xl font-bold text-[#00057b] mb-4">Key Benefits</h3>
                                <div class="grid grid-cols-2 gap-3">
                                    @foreach($service['features'] as $feature)
                                    <div class="flex items-start gap-2 text-sm">
                                        <svg class="w-5 h-5 text-[#ffc400] flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-700 font-medium">{{ $feature }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Image -->
                        <div class="relative h-[400px] rounded-2xl overflow-hidden shadow-xl">
                            <img src="{{ asset($service['image']) }}" 
                                 alt="{{ $service['title'] }}" 
                                 class="w-full h-full object-cover" />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#00057b]/50 to-transparent"></div>
                        </div>
                    </div>

                    <!-- Capabilities Grid -->
                    <div class="bg-gray-50 p-8 md:p-12">
                        <h3 class="text-3xl font-bold text-[#00057b] mb-8 text-center">
                            Our Capabilities
                        </h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            @foreach($service['capabilities'] as $capIndex => $capability)
                            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow"
                                 x-data="{ show: true }"
                                 x-intersect.once="show = true"
                                 x-show="show"
                                 x-transition:enter="transition ease-out duration-500"
                                 x-transition:enter-start="opacity-0 translate-y-5"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 style="transition-delay: {{ $capIndex * 100 }}ms;">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-[#ffc400] rounded-lg flex items-center justify-center text-[#00057b]">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            {!! $capability['icon'] !!}
                                        </svg>
                                    </div>
                                    <h4 class="text-xl font-bold text-gray-900">{{ $capability['name'] }}</h4>
                                </div>
                                <ul class="space-y-2">
                                    @foreach($capability['items'] as $item)
                                    <li class="flex items-start gap-2 text-gray-700">
                                        <span class="w-1.5 h-1.5 bg-[#00057b] rounded-full mt-2 flex-shrink-0"></span>
                                        <span>{{ $item }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- PROCESS SECTION -->
    <section class="py-20 bg-black text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16"
                 x-data="{ show: true }"
                 x-intersect.once="show = true">
                <h2 x-show="show"
                    x-transition:enter="transition ease-out duration-600"
                    x-transition:enter-start="opacity-0 translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="text-4xl md:text-5xl font-bold mb-4">
                    Our <span class="text-[#ffc400]">Process</span>
                </h2>
                <p x-show="show"
                   x-transition:enter="transition ease-out duration-600 delay-100"
                   x-transition:enter-start="opacity-0 translate-y-5"
                   x-transition:enter-end="opacity-100 translate-y-0"
                   class="text-xl text-white/80">
                    A proven methodology that ensures success
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                @php
                $processes = [
                    [
                        'step' => '01',
                        'title' => 'Discovery',
                        'description' => 'Understanding your needs and goals',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Planning',
                        'description' => 'Strategic roadmap and architecture',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />'
                    ],
                    [
                        'step' => '03',
                        'title' => 'Development',
                        'description' => 'Agile development with regular updates',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Launch & Support',
                        'description' => 'Deployment and ongoing optimization',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />'
                    ]
                ];
                @endphp

                @foreach($processes as $index => $process)
                <div class="relative"
                     x-data="{ show: true }"
                     x-intersect.once="show = true"
                     x-show="show"
                     x-transition:enter="transition ease-out duration-600"
                     x-transition:enter-start="opacity-0 translate-y-5"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     style="transition-delay: {{ $index * 100 }}ms;">
                    <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 hover:border-[#ffc400] transition-colors">
                        <div class="w-16 h-16 bg-[#ffc400] rounded-xl flex items-center justify-center text-[#00057b] mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                {!! $process['icon'] !!}
                            </svg>
                        </div>
                        <div class="text-6xl font-bold text-[#ffc400]/20 mb-2">{{ $process['step'] }}</div>
                        <h3 class="text-2xl font-bold mb-2">{{ $process['title'] }}</h3>
                        <p class="text-white/70">{{ $process['description'] }}</p>
                    </div>
                    @if($index < 3)
                    <div class="hidden md:block absolute top-1/2 -right-4 w-8 h-0.5 bg-[#ffc400]/30"></div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-20 bg-[#ffc400]">
        <div class="max-w-4xl mx-auto px-6 text-center"
             x-data="{ show: true }"
             x-intersect.once="show = true">
            <h2 x-show="show"
                x-transition:enter="transition ease-out duration-600"
                x-transition:enter-start="opacity-0 translate-y-5"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="text-4xl md:text-5xl font-bold text-[#00057b] mb-6">
                Ready to Get Started?
            </h2>
            <p x-show="show"
               x-transition:enter="transition ease-out duration-600 delay-100"
               x-transition:enter-start="opacity-0 translate-y-5"
               x-transition:enter-end="opacity-100 translate-y-0"
               class="text-xl text-gray-800 mb-8">
                Let's discuss how our solutions can help you achieve your goals. Contact us today for a free consultation.
            </p>
            <a x-show="show"
               x-transition:enter="transition ease-out duration-600 delay-200"
               x-transition:enter-start="opacity-0 translate-y-5"
               x-transition:enter-end="opacity-100 translate-y-0"
               href="{{ route('contact') }}"
               class="bg-[#00057b] text-white px-10 py-5 rounded-full text-lg font-bold hover:bg-black hover:scale-105 transition-all shadow-xl inline-flex items-center gap-3">
                Get Started Today
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>
</div>
@endsection

@push('styles')
<style>
    /* Hero blob animations */
    @keyframes blob1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(50px, 30px) scale(1.1); }
        66% { transform: translate(-20px, 50px) scale(0.9); }
    }
    
    @keyframes blob2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(-30px, 50px) scale(1.1); }
        66% { transform: translate(40px, -20px) scale(0.95); }
    }
    
    .hero-blob-1 {
        animation: blob1 10s ease-in-out infinite;
    }
    
    .hero-blob-2 {
        animation: blob2 12s ease-in-out infinite;
    }
</style>
@endpush

@push('scripts')
<script>
function solutionsPage() {
    return {
        activeService: 0,
        init() {
            // Check URL hash for service selection
            const hash = window.location.hash;
            if (hash && hash.startsWith('#service-')) {
                const serviceIndex = parseInt(hash.replace('#service-', ''));
                if (!isNaN(serviceIndex) && serviceIndex >= 0 && serviceIndex < {{ count($services) }}) {
                    this.activeService = serviceIndex;
                    // Scroll to service cards
                    setTimeout(() => {
                        document.getElementById('service-cards')?.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 100);
                }
            }
        }
    }
}
</script>
@endpush
