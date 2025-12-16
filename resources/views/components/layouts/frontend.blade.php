<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RZR Premium Lubricants - Powering Performance with Every Drop. Experience superior engine protection with our advanced lubricant technology.">
    <title>{{ $title ?? 'RZR' }} - Premium Lubricants</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=outfit:400,500,600,700,800|inter:400,500,600,700" rel="stylesheet" />
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-white">
    <!-- Top Bar -->
    <div class="bg-secondary text-white text-sm py-2.5 hidden md:block" style="background: linear-gradient(90deg, #1a1a2e, #16213e);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap justify-between items-center">
            <div class="flex items-center space-x-6">
                <a href="tel:+911800123456" class="flex items-center space-x-2 hover:text-orange-400 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>+91 1800-123-456</span>
                </a>
                <a href="mailto:info@rzroils.com" class="hidden sm:flex items-center space-x-2 hover:text-orange-400 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>info@rzroils.com</span>
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="{{ route('distributor') }}" class="hover:text-orange-400 transition-colors">Dealer Inquiry</a>
                <span class="text-gray-600">|</span>
                <a href="{{ route('contact') }}" class="hover:text-orange-400 transition-colors">Careers</a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav id="main-nav" class="hero-gradient sticky top-0 z-50 border-b border-gray-800/50 transition-all duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <img src="{{ asset('images/rzr-logo.jpg') }}" alt="RZR Premium Lubricants" class="h-12 md:h-14 w-auto rounded-lg transition-transform group-hover:scale-105">
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-1">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('products.index') }}" class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}">Products</a>
                    <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Service</a>
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('distributor') }}" class="nav-link {{ request()->routeIs('distributor') ? 'active' : '' }}">Become a Distributor</a>
                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </div>

                <!-- Contact Button + Mobile Menu Button -->
                <div class="flex items-center gap-2">
                    <!-- Contact Button - Always visible -->
                    <a href="{{ route('contact') }}#contact-form" class="bg-gradient-to-r from-orange-500 to-red-600 text-white px-4 py-2 lg:px-6 lg:py-2.5 rounded-lg font-semibold text-sm lg:text-base hover:from-orange-600 hover:to-red-700 transition-all shadow-md hover:shadow-lg">
                        Contact
                    </a>
                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-btn" class="lg:hidden text-white p-2 hover:bg-white/10 rounded-lg transition-colors">
                        <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu - Full Screen Overlay -->
        <div id="mobile-menu" class="hidden lg:hidden fixed inset-0 z-[100]" style="background-color: #111827;">
            <!-- Mobile Menu Header -->
            <div class="flex items-center justify-between px-4 h-16 border-b border-gray-800" style="background-color: #111827;">
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('images/rzr-logo.jpg') }}" alt="RZR Premium Lubricants" class="h-10 w-auto rounded-lg">
                </a>
                <div class="flex items-center gap-2">
                    <a href="{{ route('contact') }}#contact-form" class="bg-gradient-to-r from-orange-500 to-red-600 text-white px-4 py-2 rounded-lg font-semibold text-sm">
                        Contact
                    </a>
                    <button id="mobile-menu-close" class="text-white p-2 hover:bg-white/10 rounded-lg transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
            
            <div class="px-4 py-4 space-y-1 overflow-y-auto" style="max-height: calc(100vh - 64px); background-color: #111827;">
                <!-- Navigation Links with Icons -->
                <a href="{{ route('home') }}" class="flex items-center gap-4 px-4 py-3.5 text-white hover:bg-gradient-to-r hover:from-orange-500/10 hover:to-transparent rounded-xl transition-all duration-300 group {{ request()->routeIs('home') ? 'bg-orange-500/10 text-orange-400' : '' }}">
                    <div class="w-10 h-10 rounded-lg bg-gray-800/50 group-hover:bg-orange-500/20 flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                    <span class="font-medium group-hover:text-orange-400 transition-colors">Home</span>
                </a>
                
                <a href="{{ route('products.index') }}" class="flex items-center gap-4 px-4 py-3.5 text-white hover:bg-gradient-to-r hover:from-orange-500/10 hover:to-transparent rounded-xl transition-all duration-300 group {{ request()->routeIs('products.*') ? 'bg-orange-500/10 text-orange-400' : '' }}">
                    <div class="w-10 h-10 rounded-lg bg-gray-800/50 group-hover:bg-orange-500/20 flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <span class="font-medium group-hover:text-orange-400 transition-colors">Products</span>
                </a>
                
                <a href="{{ route('services') }}" class="flex items-center gap-4 px-4 py-3.5 text-white hover:bg-gradient-to-r hover:from-orange-500/10 hover:to-transparent rounded-xl transition-all duration-300 group {{ request()->routeIs('services') ? 'bg-orange-500/10 text-orange-400' : '' }}">
                    <div class="w-10 h-10 rounded-lg bg-gray-800/50 group-hover:bg-orange-500/20 flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <span class="font-medium group-hover:text-orange-400 transition-colors">Service</span>
                </a>
                
                <a href="{{ route('about') }}" class="flex items-center gap-4 px-4 py-3.5 text-white hover:bg-gradient-to-r hover:from-orange-500/10 hover:to-transparent rounded-xl transition-all duration-300 group {{ request()->routeIs('about') ? 'bg-orange-500/10 text-orange-400' : '' }}">
                    <div class="w-10 h-10 rounded-lg bg-gray-800/50 group-hover:bg-orange-500/20 flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="font-medium group-hover:text-orange-400 transition-colors">About</span>
                </a>
                
                <a href="{{ route('distributor') }}" class="flex items-center gap-4 px-4 py-3.5 text-white hover:bg-gradient-to-r hover:from-orange-500/10 hover:to-transparent rounded-xl transition-all duration-300 group {{ request()->routeIs('distributor') ? 'bg-orange-500/10 text-orange-400' : '' }}">
                    <div class="w-10 h-10 rounded-lg bg-gray-800/50 group-hover:bg-orange-500/20 flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <span class="font-medium group-hover:text-orange-400 transition-colors">Become a Distributor</span>
                </a>
                
                <!-- Divider -->
                <div class="my-4 mx-4 h-px bg-gradient-to-r from-transparent via-gray-700 to-transparent"></div>
                
                <!-- Contact Info -->
                <div class="px-4 py-2 space-y-3">
                    <a href="tel:+911800123456" class="flex items-center gap-3 text-gray-400 hover:text-orange-400 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="text-sm">+91 1800-123-456</span>
                    </a>
                    <a href="mailto:info@rzroils.com" class="flex items-center gap-3 text-gray-400 hover:text-orange-400 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-sm">info@rzroils.com</span>
                    </a>
                </div>
                
                <!-- CTA Button -->
                <div class="pt-4 px-2">
                    <a href="{{ route('contact') }}#contact-form" class="flex items-center justify-center gap-2 w-full py-4 bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white text-center rounded-xl font-semibold shadow-lg shadow-orange-500/25 hover:shadow-orange-500/40 transition-all duration-300 hover:scale-[1.02]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-b from-gray-900 to-gray-950 text-white">
        <!-- Main Footer -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-10">
                <!-- Company Info - Full width on mobile -->
                <div class="col-span-2 md:col-span-2">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 mb-4 group">
                        <img src="{{ asset('images/rzr-logo.jpg') }}" alt="RZR Premium Lubricants" class="h-12 w-auto rounded-lg">
                    </a>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4 max-w-sm">
                        India's trusted lubricant brand since 1985. Delivering superior quality engine oils and lubricants.
                    </p>
                    <!-- Social Icons - Smaller on mobile -->
                    <div class="flex space-x-2">
                        <a href="#" class="w-9 h-9 bg-gray-800 rounded-full flex items-center justify-center hover:bg-orange-500 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 bg-gray-800 rounded-full flex items-center justify-center hover:bg-orange-500 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 bg-gray-800 rounded-full flex items-center justify-center hover:bg-orange-500 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 bg-gray-800 rounded-full flex items-center justify-center hover:bg-orange-500 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-bold text-base lg:text-lg mb-4 lg:mb-6">Quick Links</h4>
                    <ul class="space-y-2 lg:space-y-3 text-sm lg:text-base">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-orange-400 transition-colors">Home</a></li>
                        <li><a href="{{ route('products.index') }}" class="text-gray-400 hover:text-orange-400 transition-colors">Products</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-orange-400 transition-colors">Services</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-orange-400 transition-colors">About Us</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h4 class="font-bold text-base lg:text-lg mb-4 lg:mb-6">Support</h4>
                    <ul class="space-y-2 lg:space-y-3 text-sm lg:text-base">
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-orange-400 transition-colors">Contact Us</a></li>
                        <li><a href="{{ route('distributor') }}" class="text-gray-400 hover:text-orange-400 transition-colors">Become a Dealer</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <p class="text-gray-500 text-sm text-center">© {{ date('Y') }} RZR Premium Lubricants. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scroll-top" class="scroll-top" style="animation: float 2s ease-in-out infinite;">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </button>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        
        function openMobileMenu() {
            mobileMenu.classList.remove('hidden');
            menuIcon?.classList.add('hidden');
            closeIcon?.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        
        function closeMobileMenu() {
            mobileMenu.classList.add('hidden');
            menuIcon?.classList.remove('hidden');
            closeIcon?.classList.add('hidden');
            document.body.style.overflow = '';
        }
        
        mobileMenuBtn?.addEventListener('click', openMobileMenu);
        mobileMenuClose?.addEventListener('click', closeMobileMenu);

        // Scroll effects
        const mainNav = document.getElementById('main-nav');
        const scrollTopBtn = document.getElementById('scroll-top');
        
        window.addEventListener('scroll', () => {
            // Nav background on scroll
            if (window.scrollY > 50) {
                mainNav?.classList.add('backdrop-blur-md', 'shadow-lg');
                mainNav?.style.setProperty('background', 'rgba(26, 26, 46, 0.95)');
            } else {
                mainNav?.classList.remove('backdrop-blur-md', 'shadow-lg');
                mainNav?.style.removeProperty('background');
            }

            // Scroll to top button - show only when scrolling
            if (window.scrollY > 300) {
                scrollTopBtn?.classList.add('visible');
            } else {
                scrollTopBtn?.classList.remove('visible');
            }
        });

        scrollTopBtn?.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Scroll animation observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const scrollObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.scroll-fade-up, .scroll-scale').forEach(el => {
            scrollObserver.observe(el);
        });
    </script>
</body>
</html>
