<x-layouts.frontend>
    @php $title = $category->name; @endphp
    
    <!-- Hero Section -->
    <section class="hero-gradient py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-2 text-sm text-gray-400 mb-4">
                <a href="{{ route('products.index') }}" class="hover:text-red-400">Products</a>
                <span>/</span>
                <span class="text-red-400">{{ $category->name }}</span>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-white">
                {{ $category->name }}
            </h1>
            @if($category->description)
            <p class="text-gray-400 mt-2 max-w-2xl">{{ $category->description }}</p>
            @endif
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-4 gap-8">
                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-xl p-6 shadow-sm sticky top-24">
                        <h3 class="font-semibold text-gray-900 mb-4">Categories</h3>
                        <ul class="space-y-1">
                            @foreach($categories as $cat)
                            <li>
                                <a href="{{ route('products.category', $cat) }}" 
                                   class="block py-2 px-3 rounded-lg text-sm transition-all {{ $cat->id === $category->id ? 'bg-red-50 text-red-600 font-medium' : 'text-gray-600 hover:bg-gray-50' }}">
                                    {{ $cat->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="lg:col-span-3">
                    @if($products->count() > 0)
                    <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-6">
                        @foreach($products as $product)
                        <a href="{{ route('products.show', [$category, $product]) }}" class="bg-white rounded-xl overflow-hidden shadow-sm group hover:shadow-lg transition-all">
                            <div class="aspect-square bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center overflow-hidden">
                                @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                                @else
                                <div class="text-center p-4">
                                    <div class="w-16 h-24 bg-gradient-to-b from-amber-400 to-amber-600 rounded mx-auto shadow-lg"></div>
                                </div>
                                @endif
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-900 group-hover:text-red-600 transition-colors">{{ $product->name }}</h3>
                                @if($product->specifications)
                                <p class="text-red-500 text-sm mt-1">{{ $product->specifications }}</p>
                                @endif
                                <span class="text-gray-400 text-sm mt-2 inline-flex items-center group-hover:text-red-500">
                                    View Details
                                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </span>
                            </div>
                        </a>
                        @endforeach
                    </div>

                    <div class="mt-10">
                        {{ $products->links() }}
                    </div>
                    @else
                    <div class="text-center py-16 bg-white rounded-xl">
                        <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                        <h3 class="text-lg font-semibold text-gray-600">No products in this category</h3>
                        <p class="text-gray-400 mt-2">Check back soon for updates.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-layouts.frontend>
