<x-layouts.admin>
    @php $header = 'Partner Brands'; @endphp
    
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
        <p class="text-gray-500 text-sm lg:text-base">Manage trusted partner brand logos</p>
        <a href="{{ route('admin.partner-brands.create') }}" class="btn-admin btn-admin-primary w-full sm:w-auto justify-center">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Add Brand
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6">
        {{ session('success') }}
    </div>
    @endif

    <!-- Mobile Card View -->
    <div class="lg:hidden space-y-3">
        @forelse($brands as $brand)
        <div class="bg-white rounded-xl shadow-sm p-4">
            <div class="flex items-center justify-between gap-3 mb-3">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center overflow-hidden flex-shrink-0">
                        @if($brand->logo)
                        <img src="{{ asset('storage/' . $brand->logo) }}" alt="{{ $brand->name }}" class="w-full h-full object-contain p-1">
                        @else
                        <span class="text-lg font-bold" style="color: {{ $brand->color }}">{{ substr($brand->name, 0, 2) }}</span>
                        @endif
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">{{ $brand->name }}</h3>
                        <div class="flex items-center gap-2 mt-1">
                            <span class="w-4 h-4 rounded" style="background-color: {{ $brand->color }}"></span>
                            <span class="text-xs text-gray-500">{{ $brand->color }}</span>
                        </div>
                    </div>
                </div>
                <span class="badge {{ $brand->is_active ? 'badge-success' : 'badge-danger' }} text-xs">
                    {{ $brand->is_active ? 'Active' : 'Inactive' }}
                </span>
            </div>
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.partner-brands.edit', $brand) }}" class="btn-admin btn-admin-secondary text-xs flex-1 justify-center">
                    Edit
                </a>
                <form action="{{ route('admin.partner-brands.destroy', $brand) }}" method="POST" onsubmit="return confirm('Delete this brand?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-admin btn-admin-danger text-xs">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        @empty
        <div class="bg-white rounded-xl shadow-sm p-8 text-center">
            <svg class="w-12 h-12 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
            <p class="text-gray-500">No partner brands found</p>
            <a href="{{ route('admin.partner-brands.create') }}" class="text-red-600 hover:underline mt-2 inline-block text-sm">Add your first brand →</a>
        </div>
        @endforelse
    </div>

    <!-- Desktop Table View -->
    <div class="hidden lg:block bg-white rounded-xl shadow-sm overflow-hidden">
        <div class="table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Brand</th>
                        <th>Color</th>
                        <th>Status</th>
                        <th>Order</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($brands as $brand)
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center overflow-hidden">
                                    @if($brand->logo)
                                    <img src="{{ asset('storage/' . $brand->logo) }}" alt="{{ $brand->name }}" class="w-full h-full object-contain p-1">
                                    @else
                                    <span class="text-lg font-bold" style="color: {{ $brand->color }}">{{ substr($brand->name, 0, 2) }}</span>
                                    @endif
                                </div>
                                <span class="font-medium">{{ $brand->name }}</span>
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center gap-2">
                                <span class="w-6 h-6 rounded" style="background-color: {{ $brand->color }}"></span>
                                <span class="text-sm text-gray-500">{{ $brand->color }}</span>
                            </div>
                        </td>
                        <td>
                            <span class="badge {{ $brand->is_active ? 'badge-success' : 'badge-danger' }}">
                                {{ $brand->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td class="text-sm">{{ $brand->sort_order }}</td>
                        <td>
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.partner-brands.edit', $brand) }}" class="btn-admin btn-admin-secondary text-xs">
                                    Edit
                                </a>
                                <form action="{{ route('admin.partner-brands.destroy', $brand) }}" method="POST" onsubmit="return confirm('Delete this brand?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-admin btn-admin-danger text-xs">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-12">
                            <svg class="w-12 h-12 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                            <p class="text-gray-500">No partner brands found</p>
                            <a href="{{ route('admin.partner-brands.create') }}" class="text-red-600 hover:underline mt-2 inline-block text-sm">Add your first brand →</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6">
        {{ $brands->links() }}
    </div>
</x-layouts.admin>
