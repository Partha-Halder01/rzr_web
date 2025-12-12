<x-layouts.frontend>
    @php $title = $product->name; @endphp
    
    <!-- Product Detail Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-sm mb-8">
                <a href="{{ route('products.index') }}" class="text-gray-500 hover:text-red-500">Products</a>
                <span class="text-gray-400">/</span>
                <a href="{{ route('products.category', $category) }}" class="text-gray-500 hover:text-red-500">{{ $category->name }}</a>
                <span class="text-gray-400">/</span>
                <span class="text-gray-900 font-medium">{{ Str::limit($product->name, 30) }}</span>
            </nav>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Product Image -->
                <div class="bg-white rounded-2xl p-8 shadow-sm">
                    <div class="aspect-square bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl flex items-center justify-center overflow-hidden">
                        @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                        @else
                        <div class="text-center">
                            <div class="w-32 h-48 bg-gradient-to-b from-amber-400 to-amber-600 rounded-lg mx-auto shadow-xl"></div>
                            <p class="mt-4 text-gray-500 font-medium">Premium Engine Oil</p>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Product Info -->
                <div>
                    <a href="{{ route('products.category', $category) }}" class="inline-block px-4 py-1.5 rounded-full bg-red-100 text-red-600 text-sm font-medium mb-4">
                        {{ $category->name }}
                    </a>
                    
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $product->name }}</h1>

                    @if($product->specifications)
                    <div class="inline-block px-4 py-2 rounded-lg bg-amber-100 text-amber-800 font-semibold mb-6">
                        {{ $product->specifications }}
                    </div>
                    @endif

                    @if($product->description)
                    <div class="bg-white rounded-xl p-6 shadow-sm mb-6">
                        <h3 class="font-semibold text-gray-900 mb-3">Product Description</h3>
                        <div class="text-gray-600 leading-relaxed">
                            {!! nl2br(e($product->description)) !!}
                        </div>
                    </div>
                    @endif

                    <!-- Features -->
                    <div class="bg-white rounded-xl p-6 shadow-sm mb-6">
                        <h3 class="font-semibold text-gray-900 mb-4">Key Features</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-red-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Premium quality formulation</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-red-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Superior engine protection</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-red-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Extended drain intervals</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-red-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Optimal performance in all conditions</span>
                            </li>
                        </ul>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}" class="btn-primary justify-center">
                            <span>Enquire Now</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                        </a>
                        <a href="{{ route('distributor') }}" class="px-6 py-3 rounded-lg border border-gray-300 text-gray-700 font-semibold text-center hover:bg-gray-50 transition-colors">
                            Find Distributor
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    @if($relatedProducts->count() > 0)
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Related Products</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($relatedProducts as $related)
                <a href="{{ route('products.show', [$category, $related]) }}" class="bg-gray-50 rounded-xl overflow-hidden group hover:shadow-lg transition-all">
                    <div class="aspect-square bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center overflow-hidden">
                        @if($related->image)
                        <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                        @else
                        <div class="w-12 h-20 bg-gradient-to-b from-amber-400 to-amber-600 rounded shadow-lg"></div>
                        @endif
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 group-hover:text-red-600 transition-colors">{{ Str::limit($related->name, 25) }}</h3>
                        @if($related->specifications)
                        <p class="text-red-500 text-sm mt-1">{{ $related->specifications }}</p>
                        @endif
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</x-layouts.frontend>
