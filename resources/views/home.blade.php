<x-layouts.frontend>
    @php $title = 'Home'; @endphp
    
    <!-- Hero Section -->
    <section class="hero-gradient relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="relative z-10">
                    <span class="inline-block text-red-500 text-sm font-medium mb-4">★ Premium Quality Since 1995</span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                        Powering <span class="text-red-500 italic">Performance</span><br>
                        with Every Drop
                    </h1>
                    <p class="text-gray-400 text-lg mb-8 max-w-lg">
                        Experience superior engine protection with our advanced lubricant technology. Trusted by millions of vehicles across India.
                    </p>
                    
                    <div class="flex flex-wrap gap-4 mb-10">
                        <a href="{{ route('products.index') }}" class="btn-primary">
                            Explore Products
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="{{ route('about') }}" class="btn-outline">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                            Watch Video
                        </a>
                    </div>

                    <!-- Trust Badges -->
                    <div class="flex flex-wrap gap-6 text-gray-400 text-sm">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5zm-1 6h2v2h-2V8zm0 4h2v6h-2v-6z"/>
                            </svg>
                            <span>ISO Certified</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                            </svg>
                            <span>OEM Approved</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                            </svg>
                            <span>Eco Friendly</span>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Product Image -->
                <div class="relative hidden lg:block">
                    <!-- Viscosity Badge -->
                    <div class="absolute top-0 right-1/3 viscosity-badge animate-float">
                        <div class="value">5W</div>
                        <div>
                            <span class="text-xs text-gray-500">Viscosity</span>
                            <span class="block font-bold text-gray-900">5W-40</span>
                        </div>
                    </div>

                    <!-- Product Image Placeholder -->
                    <div class="relative mx-auto w-80 h-96 bg-gradient-to-b from-amber-100 to-amber-200 rounded-3xl flex items-end justify-center overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-32 h-48 bg-gradient-to-b from-amber-400 to-amber-600 rounded-lg mx-auto shadow-xl"></div>
                                <p class="mt-4 text-amber-800 font-semibold">Premium Engine Oil</p>
                            </div>
                        </div>
                    </div>

                    <!-- API Badge -->
                    <div class="absolute bottom-10 right-0 api-badge animate-float" style="animation-delay: 0.5s;">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs text-gray-500">Rating</span>
                            <span class="block font-bold text-gray-900">API SN Plus</span>
                        </div>
                    </div>

                    <!-- Decorative Elements -->
                    <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-red-500/10 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-center text-gray-400">
            <span class="text-sm">Scroll to explore</span>
            <div class="mt-2 w-6 h-10 border-2 border-gray-600 rounded-full mx-auto flex justify-center pt-2">
                <div class="w-1.5 h-3 bg-red-500 rounded-full animate-bounce"></div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-white" id="stats-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="stat-icon">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="text-3xl md:text-4xl font-bold text-gray-900">
                        <span class="counter" data-target="38" data-suffix="+">0</span>
                    </div>
                    <div class="text-gray-500 mt-1">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="stat-icon">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <div class="text-3xl md:text-4xl font-bold text-gray-900">
                        <span class="counter" data-target="150" data-suffix="+">0</span>
                    </div>
                    <div class="text-gray-500 mt-1">Products Range</div>
                </div>
                <div class="text-center">
                    <div class="stat-icon">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div class="text-3xl md:text-4xl font-bold text-gray-900">
                        <span class="counter" data-target="5000" data-suffix="+" data-format="comma">0</span>
                    </div>
                    <div class="text-gray-500 mt-1">Dealers Network</div>
                </div>
                <div class="text-center">
                    <div class="stat-icon">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m9 5.197v-1a6 6 0 00-3-5.197"/>
                        </svg>
                    </div>
                    <div class="text-3xl md:text-4xl font-bold text-gray-900">
                        <span class="counter" data-target="10" data-suffix="M+">0</span>
                    </div>
                    <div class="text-gray-500 mt-1">Happy Customers</div>
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
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-red-500 font-medium">OUR RANGE</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">
                    Product <span class="text-red-500">Categories</span>
                </h2>
                <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                    Comprehensive range of lubricants for every application - from daily commutes to industrial operations
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $categoryIcons = [
                        ['bg' => 'bg-blue-500', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>'],
                        ['bg' => 'bg-red-500', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>'],
                        ['bg' => 'bg-indigo-500', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>'],
                        ['bg' => 'bg-amber-500', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>'],
                        ['bg' => 'bg-teal-500', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>'],
                        ['bg' => 'bg-green-500', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>'],
                        ['bg' => 'bg-orange-500', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>'],
                        ['bg' => 'bg-purple-500', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>'],
                    ];
                @endphp
                
                @foreach(\App\Models\Category::where('is_active', true)->orderBy('sort_order')->take(8)->withCount('products')->get() as $index => $category)
                <a href="{{ route('products.category', $category) }}" class="category-card group">
                    <div class="category-icon {{ $categoryIcons[$index % count($categoryIcons)]['bg'] }}">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            {!! $categoryIcons[$index % count($categoryIcons)]['icon'] !!}
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-1">{{ Str::limit($category->name, 25) }}</h3>
                    <p class="text-gray-500 text-sm mb-3">{{ Str::limit($category->description, 40) }}</p>
                    <span class="text-red-500 text-sm font-medium group-hover:underline inline-flex items-center">
                        {{ $category->products_count }} Products
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </span>
                </a>
                @endforeach
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('products.index') }}" class="btn-primary">
                    View All Categories
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-red-500 font-medium">OUR PRODUCTS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">
                    Premium <span class="text-red-500">Lubricants</span>
                </h2>
                <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                    Discover our extensive range of high-quality engine oils and lubricants
                </p>
            </div>

            <!-- Filter Tabs -->
            <div class="flex flex-wrap justify-center gap-3 mb-10">
                <span class="filter-tab active">All Products</span>
                @foreach(\App\Models\Category::where('is_active', true)->orderBy('sort_order')->take(6)->get() as $cat)
                <a href="{{ route('products.category', $cat) }}" class="filter-tab">{{ Str::limit($cat->name, 15) }}</a>
                @endforeach
            </div>

            <!-- Products Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach(\App\Models\Product::where('is_active', true)->with('category')->take(8)->get() as $product)
                <a href="{{ route('products.show', [$product->category, $product]) }}" class="bg-gray-50 rounded-xl p-4 group hover:shadow-lg transition-all">
                    <div class="aspect-square bg-gradient-to-br from-gray-100 to-gray-200 rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                        @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                        @else
                        <div class="text-center p-4">
                            <div class="w-16 h-24 bg-gradient-to-b from-amber-400 to-amber-600 rounded mx-auto shadow-lg"></div>
                        </div>
                        @endif
                    </div>
                    <span class="text-xs text-red-500 font-medium">{{ $product->category->name }}</span>
                    <h3 class="font-semibold text-gray-900 mt-1 group-hover:text-red-600 transition-colors">{{ Str::limit($product->name, 30) }}</h3>
                    @if($product->specifications)
                    <p class="text-gray-500 text-sm mt-1">{{ $product->specifications }}</p>
                    @endif
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 dark-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-red-500 font-medium">WHY CHOOSE US</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mt-2">
                    The RZR <span class="text-red-500">Advantage</span>
                </h2>
                <p class="text-gray-400 mt-4 max-w-2xl mx-auto">
                    Experience the difference with our scientifically formulated lubricants
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Superior Protection</h3>
                    <p class="text-gray-400 text-sm">Advanced molecular technology provides exceptional wear protection for your engine components</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Enhanced Performance</h3>
                    <p class="text-gray-400 text-sm">Optimized viscosity delivers maximum power output and fuel efficiency</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Thermal Stability</h3>
                    <p class="text-gray-400 text-sm">Maintains consistent performance across extreme temperature variations</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Clean Engine</h3>
                    <p class="text-gray-400 text-sm">Premium detergents keep engine internals clean and free from deposits</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Extended Drain</h3>
                    <p class="text-gray-400 text-sm">Longer oil change intervals save time and money</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">API Certified</h3>
                    <p class="text-gray-400 text-sm">Meets and exceeds international quality standards</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-red-500 font-medium">TESTIMONIALS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">
                    What Our <span class="text-red-500">Customers</span> Say
                </h2>
            </div>

            <!-- Testimonials Carousel -->
            <div class="relative" id="testimonial-carousel">
                <div class="overflow-hidden">
                    <div class="flex transition-transform duration-500 ease-in-out" id="testimonial-slides">
                        @php
                            $testimonials = [
                                [
                                    'name' => 'Rajesh Kumar',
                                    'role' => 'Fleet Owner, Delhi',
                                    'text' => 'We\'ve been using RZR for our entire fleet of 50+ trucks. The fuel efficiency improvement and extended engine life have significantly reduced our operational costs.',
                                    'rating' => 5
                                ],
                                [
                                    'name' => 'Suresh Patel',
                                    'role' => 'Workshop Owner, Mumbai',
                                    'text' => 'RZR oils are the best in the market. My customers always come back satisfied. The quality consistency is excellent and the prices are competitive.',
                                    'rating' => 5
                                ],
                                [
                                    'name' => 'Amit Singh',
                                    'role' => 'Auto Parts Dealer, Kolkata',
                                    'text' => 'Excellent product range and great support from the RZR team. Being a distributor has been a profitable venture for my business.',
                                    'rating' => 5
                                ],
                            ];
                        @endphp
                        @foreach($testimonials as $testimonial)
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="max-w-2xl mx-auto bg-white rounded-2xl p-8 shadow-lg relative">
                                <!-- Quote Icon -->
                                <div class="absolute -top-4 left-8 text-6xl text-gray-200 font-serif">"</div>
                                
                                <!-- Stars -->
                                <div class="flex gap-1 mb-4">
                                    @for($i = 0; $i < $testimonial['rating']; $i++)
                                    <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    @endfor
                                </div>

                                <p class="text-gray-600 text-lg mb-6 relative z-10">"{{ $testimonial['text'] }}"</p>

                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-bold">
                                        {{ substr($testimonial['name'], 0, 1) }}
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-900">{{ $testimonial['name'] }}</div>
                                        <div class="text-gray-500 text-sm">{{ $testimonial['role'] }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Carousel Controls -->
                <div class="flex justify-center items-center gap-4 mt-8">
                    <button onclick="prevTestimonial()" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:border-red-500 hover:text-red-500 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <div class="flex gap-2" id="testimonial-dots">
                        @foreach($testimonials as $index => $t)
                        <button onclick="goToTestimonial({{ $index }})" class="w-8 h-2 rounded-full transition-all {{ $index === 0 ? 'bg-red-500 w-8' : 'bg-gray-300' }}"></button>
                        @endforeach
                    </div>
                    <button onclick="nextTestimonial()" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:border-red-500 hover:text-red-500 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted Brands Section -->
    <section class="py-16 bg-white border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-gray-500 mb-10">Trusted by leading automotive brands</p>
            
            <div class="overflow-hidden">
                <div class="flex items-center justify-center gap-8 md:gap-16 flex-wrap">
                    @php
                        $brands = ['Tata Motors', 'Mahindra', 'Hyundai', 'Hero', 'Bajaj', 'TVS', 'Ashok Leyland', 'Toyota', 'Honda', 'Maruti Suzuki'];
                    @endphp
                    @foreach($brands as $brand)
                    <div class="text-xl md:text-2xl font-bold text-gray-400 hover:text-gray-600 transition-colors whitespace-nowrap">
                        {{ $brand }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-red-500 font-medium">GET IN TOUCH</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">
                    Contact <span class="text-red-500">Us</span>
                </h2>
                <p class="text-gray-500 mt-4">
                    Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                <label for="home_name" class="block text-sm font-medium text-gray-700 mb-1.5">Full Name *</label>
                                <input type="text" id="home_name" name="name" required class="form-input" placeholder="John Doe">
                            </div>
                            <div>
                                <label for="home_email" class="block text-sm font-medium text-gray-700 mb-1.5">Email Address *</label>
                                <input type="email" id="home_email" name="email" required class="form-input" placeholder="john@example.com">
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                <label for="home_phone" class="block text-sm font-medium text-gray-700 mb-1.5">Phone Number</label>
                                <input type="tel" id="home_phone" name="phone" class="form-input" placeholder="+91 98765 43210">
                            </div>
                            <div>
                                <label for="home_subject" class="block text-sm font-medium text-gray-700 mb-1.5">Subject</label>
                                <input type="text" id="home_subject" name="subject" class="form-input" placeholder="How can we help?">
                            </div>
                        </div>
                        <div>
                            <label for="home_message" class="block text-sm font-medium text-gray-700 mb-1.5">Message *</label>
                            <textarea id="home_message" name="message" rows="4" required class="form-input resize-none" placeholder="Tell us about your requirements..."></textarea>
                        </div>
                        <button type="submit" class="btn-primary w-full justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Info & Map -->
                <div class="space-y-6">
                    <!-- Contact Cards -->
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-white rounded-xl p-5 shadow-sm flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Email Us</h3>
                                <p class="text-gray-600 text-sm">info@rzroils.com</p>
                                <p class="text-gray-600 text-sm">support@rzroils.com</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-5 shadow-sm flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Business Hours</h3>
                                <p class="text-gray-600 text-sm">Monday - Saturday</p>
                                <p class="text-gray-600 text-sm">9:00 AM - 6:00 PM IST</p>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-sm">
                        <div class="h-64 bg-gray-200 relative">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.566474647879!2d77.20659927549814!3d28.61391927567337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1702400000000!5m2!1sen!2sin" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                                class="absolute inset-0">
                            </iframe>
                        </div>
                        <a href="https://maps.google.com/?q=New+Delhi" target="_blank" class="flex items-center justify-center gap-2 py-3 text-gray-700 hover:text-red-600 transition-colors bg-white border-t">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            View on Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-red-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Ready to Become a Distributor?
            </h2>
            <p class="text-red-100 text-lg mb-8">
                Join our network of successful distributors and grow your business with RZR Premium Lubricants
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('distributor') }}" class="bg-white text-red-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors inline-flex items-center gap-2">
                    Apply Now
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white/10 transition-colors">
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
                    dot.classList.add('bg-red-500');
                    dot.classList.remove('bg-gray-300');
                } else {
                    dot.classList.remove('bg-red-500');
                    dot.classList.add('bg-gray-300');
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
