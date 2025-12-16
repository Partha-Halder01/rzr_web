<x-layouts.frontend>
    @php $title = $category->name; @endphp
    
    <!-- Hero Section -->
    <section class="hero-gradient py-10 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-2 text-sm text-gray-400 mb-3">
                <a href="{{ route('products.index') }}" class="hover:text-red-400 transition-colors">Products</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-red-400">{{ $category->name }}</span>
            </div>
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">
                {{ $category->name }}
            </h1>
            @if($category->description)
            <p class="text-gray-400 mt-2 max-w-2xl text-sm md:text-base">{{ $category->description }}</p>
            @endif
            <div class="flex items-center gap-2 mt-4">
                <span class="bg-red-500/20 text-red-400 px-3 py-1 rounded-full text-sm font-medium">
                    {{ $products->total() }} Products
                </span>
            </div>
        </div>
    </section>

    <!-- Mobile Categories - Horizontal Scrollable -->
    <div class="lg:hidden bg-white border-b border-gray-200 sticky top-[80px] z-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center gap-2 py-3 overflow-x-auto scrollbar-hide -mx-4 px-4">
                @foreach($categories as $cat)
                <a href="{{ route('products.category', $cat) }}" 
                   class="flex-shrink-0 px-4 py-2 rounded-full text-sm font-medium transition-all whitespace-nowrap
                          {{ $cat->id === $category->id 
                             ? 'bg-gradient-to-r from-red-500 to-orange-500 text-white shadow-md' 
                             : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                    {{ $cat->name }}
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <section class="py-8 md:py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-4 gap-6 lg:gap-8">
                <!-- Desktop Sidebar -->
                <div class="hidden lg:block lg:col-span-1">
                    <div class="bg-white rounded-2xl p-6 shadow-sm sticky top-24 border border-gray-100">
                        <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                            Categories
                        </h3>
                        <ul class="space-y-1">
                            @foreach($categories as $cat)
                            <li>
                                <a href="{{ route('products.category', $cat) }}" 
                                   class="flex items-center justify-between py-2.5 px-3 rounded-xl text-sm transition-all group
                                          {{ $cat->id === $category->id 
                                             ? 'bg-gradient-to-r from-red-500 to-orange-500 text-white shadow-md' 
                                             : 'text-gray-600 hover:bg-gray-50' }}">
                                    <span class="truncate">{{ $cat->name }}</span>
                                    <span class="flex-shrink-0 text-xs {{ $cat->id === $category->id ? 'text-white/80' : 'text-gray-400' }}">
                                        {{ $cat->products_count ?? 0 }}
                                    </span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="lg:col-span-3">
                    @if($products->count() > 0)
                    <div class="grid grid-cols-2 sm:grid-cols-2 xl:grid-cols-3 gap-3 sm:gap-4 lg:gap-6">
                        @foreach($products as $product)
                        <a href="{{ route('products.show', [$category, $product]) }}" 
                           class="bg-white rounded-xl sm:rounded-2xl overflow-hidden shadow-sm group hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-red-200">
                            <!-- Product Image -->
                            <div class="aspect-square bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center overflow-hidden relative">
                                @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" 
                                     alt="{{ $product->name }}" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                @else
                                <div class="text-center p-4">
                                    <div class="w-12 h-20 sm:w-16 sm:h-24 bg-gradient-to-b from-amber-400 to-amber-600 rounded-lg mx-auto shadow-lg transform group-hover:scale-110 transition-transform"></div>
                                </div>
                                @endif
                                <!-- Hover Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity hidden sm:flex items-end justify-center pb-4">
                                    <span class="text-white font-medium text-sm flex items-center gap-1">
                                        View Details
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Product Info -->
                            <div class="p-3 sm:p-4">
                                @if($product->specifications)
                                <span class="inline-block bg-red-50 text-red-600 text-xs font-semibold px-2 py-0.5 rounded-full mb-1.5">
                                    {{ $product->specifications }}
                                </span>
                                @endif
                                <h3 class="font-semibold text-gray-900 text-sm sm:text-base line-clamp-2 group-hover:text-red-600 transition-colors">
                                    {{ $product->name }}
                                </h3>
                                <!-- Mobile View Details -->
                                <div class="mt-2 sm:hidden flex items-center text-red-500 text-xs font-medium">
                                    <span>View</span>
                                    <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-8 md:mt-10">
                        {{ $products->links() }}
                    </div>
                    @else
                    <div class="text-center py-16 bg-white rounded-2xl border border-gray-100">
                        <div class="w-20 h-20 mx-auto bg-gray-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-700">No products in this category</h3>
                        <p class="text-gray-400 mt-2 text-sm">Check back soon for updates.</p>
                        <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 mt-6 bg-red-500 text-white px-6 py-2.5 rounded-full font-medium hover:bg-red-600 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Browse All Categories
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</x-layouts.frontend>
