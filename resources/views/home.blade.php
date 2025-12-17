<x-layouts.frontend>
    @php $title = 'Home'; @endphp
    
    <!-- Hero Section -->
    <section class="hero-gradient relative overflow-hidden min-h-[90vh] flex items-center">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-72 h-72 bg-orange-500/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-orange-500/5 rounded-full blur-3xl"></div>
        </div>
        
        <!-- Oil Drop Decorations -->
        <svg class="absolute top-40 right-20 w-12 h-12 text-orange-500/20 animate-float" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2c-5.33 4.55-8 8.48-8 11.8 0 4.98 3.8 8.2 8 8.2s8-3.22 8-8.2c0-3.32-2.67-7.25-8-11.8z"/>
        </svg>
        <svg class="absolute top-60 right-40 w-8 h-8 text-orange-500/15 animate-float" style="animation-delay: 0.5s;" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2c-5.33 4.55-8 8.48-8 11.8 0 4.98 3.8 8.2 8 8.2s8-3.22 8-8.2c0-3.32-2.67-7.25-8-11.8z"/>
        </svg>
        <svg class="absolute bottom-40 left-20 w-10 h-10 text-orange-500/20 animate-float" style="animation-delay: 1s;" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2c-5.33 4.55-8 8.48-8 11.8 0 4.98 3.8 8.2 8 8.2s8-3.22 8-8.2c0-3.32-2.67-7.25-8-11.8z"/>
        </svg>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20 w-full relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="space-y-8">
                    <div class="scroll-fade-up">
                        <span class="inline-flex items-center gap-2 bg-orange-500/10 text-orange-500 text-sm font-medium px-4 py-2 rounded-full">
                            <span class="w-2 h-2 bg-orange-500 rounded-full animate-pulse"></span>
                            Premium Quality Since 1985
                        </span>
                    </div>
                    
                    <h1 class="scroll-fade-up text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight" style="transition-delay: 0.1s;">
                        Powering <span class="text-gradient-animate">Performance</span><br>
                        with Every Drop
                    </h1>
                    
                    <p class="scroll-fade-up text-gray-400 text-lg max-w-lg" style="transition-delay: 0.2s;">
                        Experience superior engine protection with our advanced lubricant technology. Trusted by millions of vehicles across India.
                    </p>
                    
                    <div class="scroll-fade-up flex flex-wrap gap-4" style="transition-delay: 0.3s;">
                        <a href="{{ route('products.index') }}" class="btn-primary group">
                            <span class="relative z-10">Explore Products</span>
                            <svg class="w-5 h-5 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="{{ route('about') }}" class="btn-outline group">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                            Watch Video
                        </a>
                    </div>
                    
                    <!-- Trust Badges -->
                    <div class="scroll-fade-up flex flex-wrap gap-6 pt-4" style="transition-delay: 0.4s;">
                        <div class="flex items-center gap-2 text-gray-400">
                            <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z"/>
                            </svg>
                            <span class="text-sm">ISO Certified</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-400">
                            <svg class="w-5 h-5 text-amber-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                            </svg>
                            <span class="text-sm">OEM Approved</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-400">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.21 9l-4.38-6.56c-.19-.28-.51-.42-.83-.42-.32 0-.64.14-.83.43L6.79 9C4.6 9 3 10.6 3 12.79V17c0 2.76 2.24 5 5 5h8c2.76 0 5-2.24 5-5v-4.21c0-2.19-1.6-3.79-3.79-3.79z"/>
                            </svg>
                            <span class="text-sm">Eco Friendly</span>
                        </div>
                    </div>

                    <!-- Mobile Product Showcase -->
                    <div class="lg:hidden mt-8 relative">
                        <div class="relative flex justify-center items-center">
                            <!-- Glow Effect -->
                            <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-amber-500/10 rounded-full blur-3xl scale-75"></div>
                            
                            <!-- Viscosity Badge - Mobile -->
                            <div class="absolute top-0 left-0 sm:left-4 bg-white p-2 sm:p-3 rounded-xl shadow-lg z-20" style="animation: float 3s ease-in-out infinite;">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-orange-500 to-amber-500 rounded-full flex items-center justify-center">
                                        <span class="text-white font-bold text-xs">5W</span>
                                    </div>
                                    <div>
                                        <p class="text-[10px] sm:text-xs text-gray-400">Viscosity</p>
                                        <p class="font-bold text-gray-900 text-sm sm:text-base">5W-40</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Product Image - Mobile -->
                            <img src="{{ asset('images/hero-oil-bottle.jpg') }}" alt="RZR Premium Engine Oil" class="w-64 sm:w-80 h-auto mx-auto drop-shadow-2xl relative z-10 animate-float">
                            
                            <!-- API Badge - Mobile -->
                            <div class="absolute bottom-4 right-0 sm:right-4 bg-white p-2 sm:p-3 rounded-xl shadow-lg z-20" style="animation: float 3.5s ease-in-out infinite; animation-delay: 0.5s;">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-green-400 to-emerald-600 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-[10px] sm:text-xs text-gray-400">Rating</p>
                                        <p class="font-bold text-gray-900 text-sm sm:text-base">API SN Plus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Product Showcase -->
                <div class="scroll-scale relative lg:block hidden" style="transition-delay: 0.3s;">
                    <!-- Glow Effect -->
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-amber-500/10 rounded-full blur-3xl scale-90"></div>
                    
                    <!-- Floating Product -->
                    <div class="relative">
                        <!-- Viscosity Badge -->
                        <div class="absolute -top-4 -left-8 bg-white p-3 rounded-2xl shadow-xl z-20" style="animation: float 3s ease-in-out infinite;">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-amber-500 rounded-full flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">5W</span>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-400">Viscosity</p>
                                    <p class="font-bold text-gray-900 text-lg">5W-40</p>
                                </div>
                            </div>
                        </div>

                        <!-- Product Image - No Container, Direct on Background -->
                        <img src="{{ asset('images/hero-oil-bottle.jpg') }}" alt="RZR Premium Engine Oil" class="w-[420px] h-auto mx-auto drop-shadow-2xl animate-float">

                        <!-- API Badge -->
                        <div class="absolute bottom-10 -right-8 bg-white p-3 rounded-2xl shadow-xl z-20" style="animation: float 3.5s ease-in-out infinite; animation-delay: 0.5s;">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-600 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-400">Rating</p>
                                    <p class="font-bold text-gray-900 text-lg">API SN Plus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator - Desktop Only, Hides on Scroll -->
        <div id="scroll-indicator" class="absolute bottom-8 left-1/2 transform -translate-x-1/2 hidden lg:flex flex-col items-center gap-2 text-gray-400/60 transition-opacity duration-500">
            <span class="text-sm">Scroll to explore</span>
            <div class="w-6 h-10 border-2 border-gray-500/30 rounded-full flex justify-center pt-2">
                <div class="w-1.5 h-3 bg-orange-500 rounded-full animate-bounce"></div>
            </div>
        </div>
        
        <script>
            // Hide scroll indicator when user scrolls
            let scrollIndicator = document.getElementById('scroll-indicator');
            let hasScrolled = false;
            
            window.addEventListener('scroll', function() {
                if (!hasScrolled && window.scrollY > 50) {
                    hasScrolled = true;
                    if (scrollIndicator) {
                        scrollIndicator.style.opacity = '0';
                        setTimeout(() => {
                            scrollIndicator.style.display = 'none';
                        }, 500);
                    }
                }
            });
        </script>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white relative overflow-hidden" id="stats-section">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ea580c\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group scroll-fade-up">
                    <div class="stat-icon group-hover:scale-110 group-hover:bg-orange-500/20 transition-all duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
                        <span class="counter" data-target="38" data-suffix="+">0</span>
                    </div>
                    <p class="text-gray-500 font-medium">Years Experience</p>
                </div>
                <div class="text-center group scroll-fade-up" style="transition-delay: 0.1s;">
                    <div class="stat-icon group-hover:scale-110 group-hover:bg-orange-500/20 transition-all duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <div class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
                        <span class="counter" data-target="150" data-suffix="+">0</span>
                    </div>
                    <p class="text-gray-500 font-medium">Products Range</p>
                </div>
                <div class="text-center group scroll-fade-up" style="transition-delay: 0.2s;">
                    <div class="stat-icon group-hover:scale-110 group-hover:bg-orange-500/20 transition-all duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
                        <span class="counter" data-target="5000" data-suffix="+" data-format="comma">0</span>
                    </div>
                    <p class="text-gray-500 font-medium">Dealers Network</p>
                </div>
                <div class="text-center group scroll-fade-up" style="transition-delay: 0.3s;">
                    <div class="stat-icon group-hover:scale-110 group-hover:bg-orange-500/20 transition-all duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m9 5.197v-1a6 6 0 00-3-5.197"/>
                        </svg>
                    </div>
                    <div class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
                        <span class="counter" data-target="10" data-suffix="M+">0</span>
                    </div>
                    <p class="text-gray-500 font-medium">Happy Customers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.counter');
            let animated = false;

            function formatNumber(num, format) {
                if (format === 'comma') {
                    return num.toLocaleString();
                }
                return num;
            }

            function animateCounter(counter) {
                const target = parseInt(counter.dataset.target);
                const suffix = counter.dataset.suffix || '';
                const format = counter.dataset.format || '';
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16);
                let current = 0;

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = formatNumber(Math.floor(current), format) + suffix;
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = formatNumber(target, format) + suffix;
                    }
                };

                updateCounter();
            }

            function startCounters() {
                if (animated) return;
                animated = true;
                counters.forEach(counter => animateCounter(counter));
            }

            // Intersection Observer to trigger animation when section is visible
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        startCounters();
                        observer.disconnect();
                    }
                });
            }, { threshold: 0.3 });

            const statsSection = document.getElementById('stats-section');
            if (statsSection) {
                observer.observe(statsSection);
            }
        });
    </script>

    <!-- Product Categories Section -->
    <section id="categories" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <span class="scroll-fade-up inline-block text-orange-500 font-semibold tracking-wider uppercase text-sm">
                    Our Range
                </span>
                <h2 class="scroll-fade-up text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900" style="transition-delay: 0.1s;">
                    Product <span class="text-gradient-animate">Categories</span>
                </h2>
                <p class="scroll-fade-up text-gray-500 max-w-2xl mx-auto text-lg" style="transition-delay: 0.2s;">
                    Comprehensive range of lubricants for every application - from daily commutes to industrial operations
                </p>
            </div>

            <!-- Categories Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                @php
                    $categoryGradients = [
                        'from-orange-500 to-amber-500',
                        'from-red-500 to-orange-500',
                        'from-slate-600 to-slate-800',
                        'from-blue-500 to-cyan-500',
                        'from-emerald-500 to-teal-500',
                        'from-purple-500 to-indigo-500',
                        'from-green-500 to-emerald-500',
                        'from-pink-500 to-rose-500',
                    ];
                    $categoryIcons = [
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>',
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/>',
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>',
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>',
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>',
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>',
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>',
                    ];
                @endphp
                
                @foreach(\App\Models\Category::where('is_active', true)->orderBy('sort_order')->take(8)->withCount('products')->get() as $index => $category)
                <a href="{{ route('products.category', $category) }}" class="scroll-scale group h-full" style="transition-delay: {{ 0.1 * $index }}s;">
                    <div class="relative overflow-hidden rounded-2xl p-6 bg-white border border-gray-100 hover:border-orange-500/30 transition-all duration-500 hover:shadow-xl hover:shadow-orange-500/10 h-full flex flex-col min-h-[200px]">
                        <!-- Gradient Overlay on Hover -->
                        <div class="absolute inset-0 bg-gradient-to-br {{ $categoryGradients[$index % count($categoryGradients)] }} opacity-0 group-hover:opacity-5 transition-opacity duration-500"></div>
                        
                        <!-- Icon -->
                        <div class="relative z-10 w-14 h-14 rounded-xl bg-gradient-to-br {{ $categoryGradients[$index % count($categoryGradients)] }} flex items-center justify-center mb-4 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                {!! $categoryIcons[$index % count($categoryIcons)] !!}
                            </svg>
                        </div>

                        <!-- Content -->
                        <div class="relative z-10 flex-grow flex flex-col">
                            <h3 class="font-bold text-gray-900 text-lg mb-1 group-hover:text-orange-500 transition-colors">{{ Str::limit($category->name, 20) }}</h3>
                            <p class="text-gray-500 text-sm mb-3 flex-grow line-clamp-2">{{ Str::limit($category->description, 35) }}</p>
                            <span class="inline-flex items-center text-sm font-medium text-orange-500 mt-auto">
                                {{ $category->products_count }} Products
                                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </span>
                        </div>

                        <!-- Decorative Corner -->
                        <div class="absolute -bottom-2 -right-2 w-20 h-20 bg-gradient-to-br from-transparent to-gray-50 rounded-tl-3xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>
                </a>
                @endforeach
            </div>

            <div class="text-center mt-12 scroll-fade-up" style="transition-delay: 0.4s;">
                <a href="{{ route('products.index') }}" class="btn-primary">
                    <span class="relative z-10">View All Categories</span>
                    <svg class="w-5 h-5 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section id="products" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12 space-y-4">
                <span class="scroll-fade-up inline-block text-orange-500 font-semibold tracking-wider uppercase text-sm">
                    Our Products
                </span>
                <h2 class="scroll-fade-up text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900" style="transition-delay: 0.1s;">
                    Premium <span class="text-gradient-animate">Lubricants</span>
                </h2>
                <p class="scroll-fade-up text-gray-500 max-w-2xl mx-auto text-lg" style="transition-delay: 0.2s;">
                    Discover our extensive range of high-quality engine oils and lubricants
                </p>
            </div>

            @php
                $categories = \App\Models\Category::where('is_active', true)->orderBy('sort_order')->take(6)->get();
                $allProducts = \App\Models\Product::where('is_active', true)->with('category')->get();
            @endphp

            <!-- Filter Tabs -->
            <div class="scroll-fade-up mb-8 overflow-x-auto hide-scrollbar" style="transition-delay: 0.3s;">
                <div class="flex gap-2 min-w-max justify-center pb-2">
                    <button type="button" class="filter-tab active" data-category="all" onclick="filterProducts('all', this)">All Products</button>
                    @foreach($categories as $cat)
                    <button type="button" class="filter-tab" data-category="{{ $cat->id }}" data-category-slug="{{ $cat->slug }}" onclick="filterProducts('{{ $cat->id }}', this)">{{ Str::limit($cat->name, 15) }}</button>
                    @endforeach
                </div>
            </div>

            <!-- Products Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" id="products-grid">
                @foreach($allProducts as $index => $product)
                <a href="{{ route('products.show', [$product->category, $product]) }}" 
                   class="scroll-scale product-card group product-item" 
                   data-category="{{ $product->category_id }}"
                   style="transition-delay: {{ 0.05 * ($index % 8) }}s;">
                    <div class="aspect-square bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl mb-4 flex items-center justify-center overflow-hidden">
                        @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                        <div class="text-center p-4">
                            <div class="w-16 h-24 bg-gradient-to-b from-amber-400 to-orange-600 rounded mx-auto shadow-lg"></div>
                        </div>
                        @endif
                    </div>
                    <span class="text-xs text-orange-500 font-medium uppercase tracking-wide">{{ $product->category->name }}</span>
                    <h3 class="font-bold text-gray-900 mt-1 group-hover:text-orange-500 transition-colors">{{ Str::limit($product->name, 28) }}</h3>
                    @if($product->specifications)
                    <p class="text-gray-500 text-sm mt-1">{{ Str::limit($product->specifications, 30) }}</p>
                    @endif
                </a>
                @endforeach
            </div>

            <!-- View All Button -->
            <div class="text-center mt-12 scroll-fade-up" style="transition-delay: 0.4s;" id="view-all-container">
                <a href="{{ route('products.index') }}" class="btn-primary" id="view-all-btn">
                    <svg class="w-5 h-5 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    <span class="relative z-10" id="view-all-text">View All Products</span>
                </a>
            </div>

            <!-- Category Routes for JavaScript -->
            <script>
                const categoryRoutes = {
                    @foreach($categories as $cat)
                    '{{ $cat->id }}': '{{ route('products.category', $cat) }}',
                    @endforeach
                };
                const allProductsRoute = '{{ route('products.index') }}';

                function filterProducts(categoryId, button) {
                    // Update active tab
                    document.querySelectorAll('.filter-tab').forEach(tab => tab.classList.remove('active'));
                    button.classList.add('active');

                    const products = document.querySelectorAll('.product-item');
                    const viewAllBtn = document.getElementById('view-all-btn');
                    const viewAllText = document.getElementById('view-all-text');
                    
                    let visibleCount = 0;
                    let totalMatchingProducts = 0;

                    products.forEach(product => {
                        const productCategory = product.getAttribute('data-category');
                        const matches = categoryId === 'all' || productCategory === categoryId;
                        
                        if (matches) {
                            totalMatchingProducts++;
                            if (visibleCount < 8) {
                                product.style.display = '';
                                visibleCount++;
                            } else {
                                product.style.display = 'none';
                            }
                        } else {
                            product.style.display = 'none';
                        }
                    });

                    // Update View All button
                    if (categoryId === 'all') {
                        viewAllBtn.href = allProductsRoute;
                        viewAllText.textContent = 'View All Products';
                        // Show button if more than 8 products
                        viewAllBtn.parentElement.style.display = totalMatchingProducts > 8 ? '' : 'none';
                    } else {
                        viewAllBtn.href = categoryRoutes[categoryId] || allProductsRoute;
                        viewAllText.textContent = 'View All in Category';
                        // Show button if more than 8 products in category
                        viewAllBtn.parentElement.style.display = totalMatchingProducts > 8 ? '' : 'none';
                    }
                }

                // Initialize: show only first 8 products
                document.addEventListener('DOMContentLoaded', function() {
                    filterProducts('all', document.querySelector('.filter-tab.active'));
                });
            </script>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 dark-section overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <span class="scroll-fade-up inline-block text-orange-500 font-semibold tracking-wider uppercase text-sm">
                    Why Choose Us
                </span>
                <h2 class="scroll-fade-up text-3xl md:text-4xl lg:text-5xl font-bold text-white" style="transition-delay: 0.1s;">
                    The RZR <span class="text-orange-500">Advantage</span>
                </h2>
                <p class="scroll-fade-up text-gray-400 max-w-2xl mx-auto text-lg" style="transition-delay: 0.2s;">
                    Experience the difference with our scientifically formulated lubricants
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="scroll-scale group" style="transition-delay: 0s;">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-orange-500 transition-colors">Superior Protection</h3>
                        <p class="text-gray-400">Advanced molecular technology provides exceptional wear protection for your engine components</p>
                    </div>
                </div>

                <div class="scroll-scale group" style="transition-delay: 0.1s;">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-orange-500 transition-colors">Enhanced Performance</h3>
                        <p class="text-gray-400">Optimized viscosity delivers maximum power output and fuel efficiency</p>
                    </div>
                </div>

                <div class="scroll-scale group" style="transition-delay: 0.2s;">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-orange-500 transition-colors">Thermal Stability</h3>
                        <p class="text-gray-400">Maintains consistent performance across extreme temperature variations</p>
                    </div>
                </div>

                <div class="scroll-scale group" style="transition-delay: 0.3s;">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-orange-500 transition-colors">Clean Engine</h3>
                        <p class="text-gray-400">Premium detergents keep engine internals clean and free from deposits</p>
                    </div>
                </div>

                <div class="scroll-scale group" style="transition-delay: 0.4s;">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-orange-500 transition-colors">Extended Drain</h3>
                        <p class="text-gray-400">Longer oil change intervals save time and money</p>
                    </div>
                </div>

                <div class="scroll-scale group" style="transition-delay: 0.5s;">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-orange-500 transition-colors">API Certified</h3>
                        <p class="text-gray-400">Meets and exceeds international quality standards</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <span class="scroll-fade-up inline-block text-orange-500 font-semibold tracking-wider uppercase text-sm">
                    Testimonials
                </span>
                <h2 class="scroll-fade-up text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900" style="transition-delay: 0.1s;">
                    What Our <span class="text-gradient-animate">Customers</span> Say
                </h2>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @php
                    $testimonials = \App\Models\Testimonial::active()->ordered()->get();
                    // Fallback to demo data if no testimonials exist
                    if ($testimonials->isEmpty()) {
                        $testimonials = collect([
                            (object)[
                                'name' => 'Rajesh Kumar',
                                'role' => 'Fleet Owner, Delhi',
                                'text' => 'We\'ve been using RZR for our entire fleet of 50+ trucks. The fuel efficiency improvement and extended engine life have significantly reduced our operational costs.',
                                'rating' => 5,
                                'avatar' => null
                            ],
                            (object)[
                                'name' => 'Suresh Patel',
                                'role' => 'Workshop Owner, Mumbai',
                                'text' => 'RZR oils are the best in the market. My customers always come back satisfied. The quality consistency is excellent and the prices are competitive.',
                                'rating' => 5,
                                'avatar' => null
                            ],
                            (object)[
                                'name' => 'Amit Singh',
                                'role' => 'Auto Parts Dealer, Kolkata',
                                'text' => 'Excellent product range and great support from the RZR team. Being a distributor has been a profitable venture for my business.',
                                'rating' => 5,
                                'avatar' => null
                            ],
                        ]);
                    }
                @endphp
                @foreach($testimonials as $index => $testimonial)
                <div class="scroll-scale testimonial-card" style="transition-delay: {{ 0.1 * $index }}s;">
                    <!-- Stars -->
                    <div class="flex gap-1 mb-4">
                        @for($i = 0; $i < $testimonial->rating; $i++)
                        <svg class="w-5 h-5 text-amber-400 fill-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        @endfor
                    </div>

                    <blockquote class="text-gray-700 leading-relaxed mb-6">
                        "{{ $testimonial->text }}"
                    </blockquote>

                    <div class="flex items-center gap-4 mt-auto">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center text-white font-bold text-lg overflow-hidden flex-shrink-0">
                            @if($testimonial->avatar)
                            <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="{{ $testimonial->name }}" class="w-full h-full object-cover">
                            @else
                            {{ substr($testimonial->name, 0, 1) }}
                            @endif
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">{{ $testimonial->name }}</div>
                            <div class="text-sm text-gray-500">{{ $testimonial->role }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

            <!-- Trusted Brands Marquee -->
            <div class="mt-16 pt-12 border-t border-gray-200 overflow-hidden">
                <div class="text-center mb-12 space-y-4">
                    <span class="inline-block text-orange-500 font-semibold tracking-wider uppercase text-sm">
                        Our Partners
                    </span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900">
                        Trusted by Leading <span class="text-gradient-animate">Automotive Brands</span>
                    </h2>
                </div>

                <div class="relative">
                    <!-- Fade edges -->
                    <div class="absolute left-0 top-0 bottom-0 w-20 bg-gradient-to-r from-white to-transparent z-10"></div>
                    <div class="absolute right-0 top-0 bottom-0 w-20 bg-gradient-to-l from-white to-transparent z-10"></div>
                    
                    <div class="flex animate-marquee gap-12 md:gap-20 items-center py-6">
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/toyota.svg') }}" alt="Toyota" class="h-10 md:h-12 w-auto">
                        </div>
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/honda.svg') }}" alt="Honda" class="h-10 md:h-12 w-auto">
                        </div>
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/maruti-suzuki.svg') }}" alt="Maruti Suzuki" class="h-10 md:h-12 w-auto">
                        </div>
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/tata.svg') }}" alt="Tata Motors" class="h-10 md:h-12 w-auto">
                        </div>
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/mahindra.svg') }}" alt="Mahindra" class="h-10 md:h-12 w-auto">
                        </div>
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/hyundai.svg') }}" alt="Hyundai" class="h-10 md:h-12 w-auto">
                        </div>
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/hero.svg') }}" alt="Hero MotoCorp" class="h-10 md:h-12 w-auto">
                        </div>
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/bajaj.svg') }}" alt="Bajaj Auto" class="h-10 md:h-12 w-auto">
                        </div>
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/tvs.svg') }}" alt="TVS Motor" class="h-10 md:h-12 w-auto">
                        </div>
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/ashok-leyland.svg') }}" alt="Ashok Leyland" class="h-10 md:h-12 w-auto">
                        </div>
                        <!-- Duplicate for seamless loop -->
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/toyota.svg') }}" alt="Toyota" class="h-10 md:h-12 w-auto">
                        </div>
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/honda.svg') }}" alt="Honda" class="h-10 md:h-12 w-auto">
                        </div>
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/maruti-suzuki.svg') }}" alt="Maruti Suzuki" class="h-10 md:h-12 w-auto">
                        </div>
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/tata.svg') }}" alt="Tata Motors" class="h-10 md:h-12 w-auto">
                        </div>
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/mahindra.svg') }}" alt="Mahindra" class="h-10 md:h-12 w-auto">
                        </div>
                        <div class="flex-shrink-0 opacity-70 hover:opacity-100 transition-all duration-300">
                            <img src="{{ asset('images/brands/hyundai.svg') }}" alt="Hyundai" class="h-10 md:h-12 w-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 space-y-4">
                <span class="scroll-fade-up inline-block text-orange-500 font-semibold tracking-wider uppercase text-sm">
                    Get In Touch
                </span>
                <h2 class="scroll-fade-up text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900" style="transition-delay: 0.1s;">
                    Contact <span class="text-gradient-animate">Us</span>
                </h2>
                <p class="scroll-fade-up text-gray-500 max-w-2xl mx-auto text-lg" style="transition-delay: 0.2s;">
                    Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div id="contact-form" class="scroll-scale" style="transition-delay: 0.2s;">
                    <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Send us a message</h3>
                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                            @csrf
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="home_name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                                    <input type="text" id="home_name" name="name" required class="form-input" placeholder="John Doe">
                                </div>
                                <div>
                                    <label for="home_phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                    <input type="tel" id="home_phone" name="phone" class="form-input" placeholder="+91 98765 43210">
                                </div>
                            </div>
                            <div>
                                <label for="home_email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="home_email" name="email" required class="form-input" placeholder="john@example.com">
                            </div>
                            <div>
                                <label for="home_subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                                <input type="text" id="home_subject" name="subject" class="form-input" placeholder="Dealer Inquiry / Product Query / Technical Support">
                            </div>
                            <div>
                                <label for="home_message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                                <textarea id="home_message" name="message" rows="4" required class="form-input resize-none min-h-[120px]" placeholder="Tell us about your requirements..."></textarea>
                            </div>
                            <button type="submit" class="btn-primary w-full justify-center group">
                                <svg class="w-5 h-5 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                <span class="relative z-10">Send Message</span>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="space-y-6">
                    <div class="scroll-fade-up group" style="transition-delay: 0.3s;">
                        <div class="contact-card flex gap-5 p-5 rounded-2xl hover:border-orange-500/30 hover:shadow-lg transition-all duration-300">
                            <div class="w-14 h-14 rounded-xl bg-orange-500/10 flex items-center justify-center flex-shrink-0 group-hover:bg-orange-500/20 group-hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Head Office</h4>
                                <p class="text-gray-500 text-sm">RZR House, Industrial Area</p>
                                <p class="text-gray-500 text-sm">Sector 62, Noida - 201301</p>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-fade-up group" style="transition-delay: 0.4s;">
                        <div class="contact-card flex gap-5 p-5 rounded-2xl hover:border-orange-500/30 hover:shadow-lg transition-all duration-300">
                            <div class="w-14 h-14 rounded-xl bg-orange-500/10 flex items-center justify-center flex-shrink-0 group-hover:bg-orange-500/20 group-hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Call Us</h4>
                                <p class="text-gray-500 text-sm">+91 1800-123-4567 (Toll Free)</p>
                                <p class="text-gray-500 text-sm">+91 120-456-7890</p>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-fade-up group" style="transition-delay: 0.5s;">
                        <div class="contact-card flex gap-5 p-5 rounded-2xl hover:border-orange-500/30 hover:shadow-lg transition-all duration-300">
                            <div class="w-14 h-14 rounded-xl bg-orange-500/10 flex items-center justify-center flex-shrink-0 group-hover:bg-orange-500/20 group-hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Email Us</h4>
                                <p class="text-gray-500 text-sm">info@rzroils.com</p>
                                <p class="text-gray-500 text-sm">support@rzroils.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-fade-up group" style="transition-delay: 0.6s;">
                        <div class="contact-card flex gap-5 p-5 rounded-2xl hover:border-orange-500/30 hover:shadow-lg transition-all duration-300">
                            <div class="w-14 h-14 rounded-xl bg-orange-500/10 flex items-center justify-center flex-shrink-0 group-hover:bg-orange-500/20 group-hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Business Hours</h4>
                                <p class="text-gray-500 text-sm">Monday - Saturday</p>
                                <p class="text-gray-500 text-sm">9:00 AM - 6:00 PM IST</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-orange-500 to-red-600 relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
        </div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="scroll-fade-up text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">
                Ready to Become a Distributor?
            </h2>
            <p class="scroll-fade-up text-white/80 text-lg mb-8 max-w-2xl mx-auto" style="transition-delay: 0.1s;">
                Join our network of successful distributors and grow your business with RZR Premium Lubricants
            </p>
            <div class="scroll-fade-up flex flex-wrap justify-center gap-4" style="transition-delay: 0.2s;">
                <a href="{{ route('distributor') }}" class="bg-white text-orange-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 hover:scale-105 transition-all duration-300 inline-flex items-center gap-2 shadow-lg">
                    Apply Now
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white/10 hover:scale-105 transition-all duration-300">
                    Contact Us
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonial Carousel Script -->
    <script>
        let currentTestimonial = 0;
        const totalTestimonials = 3;

        function updateTestimonialCarousel() {
            const slides = document.getElementById('testimonial-slides');
            const dots = document.querySelectorAll('#testimonial-dots button');
            
            slides.style.transform = `translateX(-${currentTestimonial * 100}%)`;
            
            dots.forEach((dot, index) => {
                if (index === currentTestimonial) {
                    dot.classList.add('bg-orange-500', 'w-8');
                    dot.classList.remove('bg-gray-300', 'w-2.5');
                } else {
                    dot.classList.remove('bg-orange-500', 'w-8');
                    dot.classList.add('bg-gray-300', 'w-2.5');
                }
            });
        }

        function nextTestimonial() {
            currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
            updateTestimonialCarousel();
        }

        function prevTestimonial() {
            currentTestimonial = (currentTestimonial - 1 + totalTestimonials) % totalTestimonials;
            updateTestimonialCarousel();
        }

        function goToTestimonial(index) {
            currentTestimonial = index;
            updateTestimonialCarousel();
        }

        // Auto-rotate testimonials every 5 seconds
        setInterval(nextTestimonial, 5000);
    </script>
</x-layouts.frontend>
