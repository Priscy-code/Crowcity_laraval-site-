@extends('layouts.app')

@section('title', 'Contact Us - CrownCity')

@section('content')
<main class="pt-[88px]">
    {{-- HERO SECTION --}}
    <section class="relative bg-[#00057b] text-white py-20 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#ffc400] rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-white rounded-full blur-3xl animate-pulse"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 text-center z-10">
            <div class="inline-block mb-6">
                <div class="w-20 h-20 bg-[#ffc400] rounded-2xl mx-auto flex items-center justify-center">
                    <svg class="w-10 h-10 text-[#00057b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                Get In <span class="text-[#ffc400]">Touch</span>
            </h1>
            <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto">
                Let's discuss how we can help transform your business with innovative technology solutions
            </p>
        </div>
    </section>

    {{-- CONTACT INFO CARDS --}}
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Phone --}}
                <a href="tel:+233201089444" class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all group cursor-pointer border-2 border-transparent hover:border-[#ffc400] transform hover:-translate-y-1">
                    <div class="w-14 h-14 bg-[#00057b] group-hover:bg-[#ffc400] rounded-xl flex items-center justify-center text-[#ffc400] group-hover:text-[#00057b] mb-4 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <p class="text-sm text-gray-500 mb-1">Phone</p>
                    <p class="font-semibold text-gray-900 group-hover:text-[#00057b]">+233(0) 201089444</p>
                </a>

                {{-- Location --}}
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all group cursor-pointer border-2 border-transparent hover:border-[#ffc400] transform hover:-translate-y-1">
                    <div class="w-14 h-14 bg-[#00057b] group-hover:bg-[#ffc400] rounded-xl flex items-center justify-center text-[#ffc400] group-hover:text-[#00057b] mb-4 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <p class="text-sm text-gray-500 mb-1">Location</p>
                    <p class="font-semibold text-gray-900 group-hover:text-[#00057b]">North Legon, Accra, Ghana</p>
                </div>

                {{-- Business Hours --}}
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all group cursor-pointer border-2 border-transparent hover:border-[#ffc400] transform hover:-translate-y-1">
                    <div class="w-14 h-14 bg-[#00057b] group-hover:bg-[#ffc400] rounded-xl flex items-center justify-center text-[#ffc400] group-hover:text-[#00057b] mb-4 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-sm text-gray-500 mb-1">Business Hours</p>
                    <p class="font-semibold text-gray-900 group-hover:text-[#00057b]">Mon - Fri, 9AM - 6PM</p>
                </div>
            </div>
        </div>
    </section>

    {{-- MAIN CONTACT SECTION --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                {{-- LEFT SIDE - INFO & IMAGE --}}
                <div class="space-y-8">
                    {{-- Info Card --}}
                    <div class="bg-gradient-to-br from-[#00057b] to-[#000340] rounded-3xl p-10 text-white shadow-2xl">
                        <h3 class="text-3xl font-bold mb-4">Let's Create Something Amazing</h3>
                        <p class="text-white/90 text-lg mb-8">
                            Whether you have a project in mind or just want to explore possibilities, we're here to help turn your vision into reality.
                        </p>

                        {{-- Quick Stats --}}
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                                <div class="text-3xl font-bold text-[#ffc400] mb-1">24h</div>
                                <div class="text-sm text-white/80">Response Time</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                                <div class="text-3xl font-bold text-[#ffc400] mb-1">100%</div>
                                <div class="text-sm text-white/80">Satisfaction Rate</div>
                            </div>
                        </div>

                        {{-- Social Links --}}
                        <div class="pt-8 border-t border-white/20">
                            <p class="text-white/70 text-sm mb-4 font-semibold">Connect With Us</p>
                            <div class="flex gap-3">
                                <a href="#" class="w-12 h-12 rounded-xl bg-white/10 hover:bg-[#ffc400] flex items-center justify-center transition-all duration-300 border border-white/20 hover:border-[#ffc400] group">
                                    <span class="text-white group-hover:text-[#00057b] text-xs font-bold">Li</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Image --}}
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl h-[300px]">
                        <img src="{{ asset('images/vision2.jpg') }}" alt="Contact CrownCity" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#00057b]/80 to-transparent flex items-end p-8">
                            <div class="text-white">
                                <h4 class="text-2xl font-bold mb-2">Visit Our Office</h4>
                                <p class="text-white/90">Schedule a meeting with our team</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- RIGHT SIDE - FORM --}}
                <div class="bg-white rounded-3xl p-10 shadow-2xl border-2 border-gray-100">
                    <h3 class="text-3xl font-bold text-[#00057b] mb-2">Send Us a Message</h3>
                    <p class="text-gray-600 mb-8">Fill out the form below and we'll get back to you shortly</p>

                    {{-- Success/Error Messages --}}
                    <div id="formMessage" class="hidden mb-6 p-4 rounded-xl"></div>

                    <form id="contactForm" class="space-y-6">
                        @csrf

                        {{-- Name & Company --}}
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-semibold mb-2 text-gray-700">Full Name *</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#ffc400] focus:outline-none transition-all duration-300"
                                    placeholder="John Doe">
                                <span class="error-message text-red-500 text-sm hidden"></span>
                            </div>

                            <div>
                                <label for="company" class="block text-sm font-semibold mb-2 text-gray-700">Company</label>
                                <input type="text" id="company" name="company"
                                    class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#ffc400] focus:outline-none transition-all duration-300"
                                    placeholder="Your Company">
                            </div>
                        </div>

                        {{-- Email & Phone --}}
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-sm font-semibold mb-2 text-gray-700">Email Address *</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#ffc400] focus:outline-none transition-all duration-300"
                                    placeholder="john@company.com">
                                <span class="error-message text-red-500 text-sm hidden"></span>
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-semibold mb-2 text-gray-700">Phone Number</label>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#ffc400] focus:outline-none transition-all duration-300"
                                    placeholder="+233 123 456 789">
                            </div>
                        </div>

                        {{-- Service --}}
                        <div>
                            <label for="service" class="block text-sm font-semibold mb-2 text-gray-700">Service Interested In *</label>
                            <select id="service" name="service" required
                                class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#ffc400] focus:outline-none transition-all duration-300 text-gray-900">
                                <option value="">Select a service...</option>
                                <option value="Custom Software Development">Custom Software Development</option>
                                <option value="Enterprise Solutions">Enterprise Solutions</option>
                                <option value="IT Consulting & Strategy">IT Consulting & Strategy</option>
                                <option value="E-Commerce Platforms">E-Commerce Platforms</option>
                                <option value="Mobile App Development">Mobile App Development</option>
                                <option value="Cloud Services">Cloud Services</option>
                                <option value="Other">Other</option>
                            </select>
                            <span class="error-message text-red-500 text-sm hidden"></span>
                        </div>

                        {{-- Message --}}
                        <div>
                            <label for="message" class="block text-sm font-semibold mb-2 text-gray-700">Project Details *</label>
                            <textarea id="message" name="message" required rows="5"
                                class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-[#ffc400] focus:outline-none transition-all duration-300 resize-none text-gray-900"
                                placeholder="Tell us about your project, goals, and timeline..."></textarea>
                            <span class="error-message text-red-500 text-sm hidden"></span>
                        </div>

                        {{-- Submit Button --}}
                        <button type="submit" id="submitBtn"
                            class="w-full py-4 bg-[#00057b] text-white font-bold rounded-xl hover:bg-black transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                            <span id="btnText">Send Message</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@push('scripts')
<script>
document.getElementById('contactForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const submitBtn = document.getElementById('submitBtn');
    const btnText = document.getElementById('btnText');
    const formMessage = document.getElementById('formMessage');
    
    // Disable button and show loading state
    submitBtn.disabled = true;
    btnText.innerHTML = `
        <svg class="animate-spin h-5 w-5" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"/>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"/>
        </svg>
        Sending...
    `;
    
    // Clear previous error messages
    document.querySelectorAll('.error-message').forEach(el => {
        el.classList.add('hidden');
        el.textContent = '';
    });
    formMessage.classList.add('hidden');
    
    // Get form data
    const formData = new FormData(this);
    
    try {
        const response = await fetch('{{ route("contact.store") }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
            },
            body: formData
        });
        
        const data = await response.json();
        
        if (response.ok) {
            // Success
            formMessage.className = 'mb-6 p-4 rounded-xl bg-green-100 border-2 border-green-500 text-green-700';
            formMessage.textContent = data.message;
            formMessage.classList.remove('hidden');
            
            // Reset form
            this.reset();
            
            // Scroll to message
            formMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
        } else {
            // Validation errors
            if (data.errors) {
                Object.keys(data.errors).forEach(key => {
                    const input = document.getElementById(key);
                    if (input) {
                        const errorSpan = input.parentElement.querySelector('.error-message');
                        if (errorSpan) {
                            errorSpan.textContent = data.errors[key][0];
                            errorSpan.classList.remove('hidden');
                        }
                    }
                });
            }
            
            formMessage.className = 'mb-6 p-4 rounded-xl bg-red-100 border-2 border-red-500 text-red-700';
            formMessage.textContent = data.message || 'Please check the form for errors.';
            formMessage.classList.remove('hidden');
        }
    } catch (error) {
        console.error('Error:', error);
        formMessage.className = 'mb-6 p-4 rounded-xl bg-red-100 border-2 border-red-500 text-red-700';
        formMessage.textContent = 'Failed to send message. Please try again.';
        formMessage.classList.remove('hidden');
    } finally {
        // Re-enable button
        submitBtn.disabled = false;
        btnText.innerHTML = 'Send Message';
    }
});

// Add focus effect to form fields
document.querySelectorAll('input, textarea, select').forEach(field => {
    field.addEventListener('focus', function() {
        this.parentElement.querySelector('label')?.classList.add('text-[#00057b]');
    });
    
    field.addEventListener('blur', function() {
        this.parentElement.querySelector('label')?.classList.remove('text-[#00057b]');
    });
});
</script>
@endpush
@endsection