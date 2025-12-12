<x-layouts.admin>
    @php $header = 'Dashboard'; @endphp
    
    <!-- Stats Grid -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-6 mb-6 lg:mb-8">
        <div class="stat-card">
            <div class="flex items-center justify-between gap-2">
                <div class="min-w-0">
                    <p class="text-xs lg:text-sm text-gray-500 mb-1">Categories</p>
                    <p class="text-2xl lg:text-3xl font-bold text-gray-900">{{ $stats['categories'] }}</p>
                </div>
                <div class="w-10 h-10 lg:w-14 lg:h-14 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 lg:w-7 lg:h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
            </div>
            <a href="{{ route('admin.categories.index') }}" class="text-xs text-blue-600 hover:underline mt-2 lg:mt-4 inline-block">View →</a>
        </div>

        <div class="stat-card">
            <div class="flex items-center justify-between gap-2">
                <div class="min-w-0">
                    <p class="text-xs lg:text-sm text-gray-500 mb-1">Products</p>
                    <p class="text-2xl lg:text-3xl font-bold text-gray-900">{{ $stats['products'] }}</p>
                </div>
                <div class="w-10 h-10 lg:w-14 lg:h-14 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 lg:w-7 lg:h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
            </div>
            <a href="{{ route('admin.products.index') }}" class="text-xs text-green-600 hover:underline mt-2 lg:mt-4 inline-block">View →</a>
        </div>

        <div class="stat-card">
            <div class="flex items-center justify-between gap-2">
                <div class="min-w-0">
                    <p class="text-xs lg:text-sm text-gray-500 mb-1">Messages</p>
                    <p class="text-2xl lg:text-3xl font-bold text-gray-900">{{ $stats['contacts'] }}</p>
                </div>
                <div class="w-10 h-10 lg:w-14 lg:h-14 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 lg:w-7 lg:h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
            <a href="{{ route('admin.contacts.index') }}" class="text-xs text-purple-600 hover:underline mt-2 lg:mt-4 inline-block">View →</a>
        </div>

        <div class="stat-card">
            <div class="flex items-center justify-between gap-2">
                <div class="min-w-0">
                    <p class="text-xs lg:text-sm text-gray-500 mb-1">Unread</p>
                    <p class="text-2xl lg:text-3xl font-bold {{ $stats['unread'] > 0 ? 'text-red-600' : 'text-gray-900' }}">{{ $stats['unread'] }}</p>
                </div>
                <div class="w-10 h-10 lg:w-14 lg:h-14 {{ $stats['unread'] > 0 ? 'bg-red-100' : 'bg-gray-100' }} rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 lg:w-7 lg:h-7 {{ $stats['unread'] > 0 ? 'text-red-600' : 'text-gray-600' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                </div>
            </div>
            @if($stats['unread'] > 0)
            <a href="{{ route('admin.contacts.index') }}" class="text-xs text-red-600 hover:underline mt-2 lg:mt-4 inline-block">View →</a>
            @else
            <span class="text-xs text-gray-400 mt-2 lg:mt-4 inline-block">All read</span>
            @endif
        </div>
    </div>

    <div class="grid lg:grid-cols-2 gap-6 lg:gap-8">
        <!-- Recent Products -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-4 lg:p-6 border-b border-gray-100 flex items-center justify-between gap-4">
                <h2 class="font-semibold text-gray-900">Recent Products</h2>
                <a href="{{ route('admin.products.create') }}" class="btn-admin btn-admin-primary text-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    <span class="hidden sm:inline">Add</span>
                </a>
            </div>
            <div class="divide-y divide-gray-100">
                @forelse($recentProducts as $product)
                <div class="p-3 lg:p-4 flex items-center gap-3 hover:bg-gray-50 transition-colors">
                    <div class="w-10 h-10 rounded-lg bg-gray-100 flex items-center justify-center overflow-hidden flex-shrink-0">
                        @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                        @else
                        <div class="w-5 h-6 bg-gradient-to-b from-amber-400 to-amber-600 rounded"></div>
                        @endif
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="font-medium text-gray-900 text-sm truncate">{{ $product->name }}</h3>
                        <p class="text-xs text-gray-500">{{ $product->category->name }}</p>
                    </div>
                    <span class="badge {{ $product->is_active ? 'badge-success' : 'badge-danger' }} hidden sm:inline">
                        {{ $product->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </div>
                @empty
                <div class="p-6 text-center text-gray-500 text-sm">
                    <p>No products yet</p>
                    <a href="{{ route('admin.products.create') }}" class="text-red-600 hover:underline mt-1 inline-block">Add first →</a>
                </div>
                @endforelse
            </div>
        </div>

        <!-- Recent Messages -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-4 lg:p-6 border-b border-gray-100 flex items-center justify-between">
                <h2 class="font-semibold text-gray-900">Recent Messages</h2>
                <a href="{{ route('admin.contacts.index') }}" class="text-xs text-red-600 hover:underline">View all</a>
            </div>
            <div class="divide-y divide-gray-100">
                @forelse($recentContacts as $contact)
                <a href="{{ route('admin.contacts.show', $contact) }}" class="p-3 lg:p-4 flex items-center gap-3 hover:bg-gray-50 transition-colors block">
                    <div class="w-8 h-8 rounded-full {{ $contact->is_read ? 'bg-gray-100' : 'bg-red-100' }} flex items-center justify-center flex-shrink-0">
                        <span class="{{ $contact->is_read ? 'text-gray-600' : 'text-red-600' }} font-medium text-xs">{{ substr($contact->name, 0, 1) }}</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2">
                            <h3 class="font-medium text-gray-900 text-sm truncate">{{ $contact->name }}</h3>
                            @if(!$contact->is_read)
                            <span class="w-2 h-2 rounded-full bg-red-500 flex-shrink-0"></span>
                            @endif
                        </div>
                        <p class="text-xs text-gray-500 truncate">{{ $contact->subject ?: 'No subject' }}</p>
                    </div>
                    <span class="text-xs text-gray-400 flex-shrink-0 hidden sm:block">{{ $contact->created_at->diffForHumans() }}</span>
                </a>
                @empty
                <div class="p-6 text-center text-gray-500 text-sm">
                    <p>No messages yet</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</x-layouts.admin>
