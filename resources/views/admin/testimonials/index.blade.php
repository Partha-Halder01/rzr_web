<x-layouts.admin>
    @php $header = 'Testimonials'; @endphp
    
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
        <p class="text-gray-500 text-sm lg:text-base">Manage customer reviews and testimonials</p>
        <a href="{{ route('admin.testimonials.create') }}" class="btn-admin btn-admin-primary w-full sm:w-auto justify-center">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Add Testimonial
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6">
        {{ session('success') }}
    </div>
    @endif

    <!-- Mobile Card View -->
    <div class="lg:hidden space-y-3">
        @forelse($testimonials as $testimonial)
        <div class="bg-white rounded-xl shadow-sm p-4">
            <div class="flex items-start gap-3 mb-3">
                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center text-white font-bold flex-shrink-0 overflow-hidden">
                    @if($testimonial->avatar)
                    <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="{{ $testimonial->name }}" class="w-full h-full object-cover">
                    @else
                    {{ substr($testimonial->name, 0, 1) }}
                    @endif
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-semibold text-gray-900">{{ $testimonial->name }}</h3>
                    @if($testimonial->role)
                    <p class="text-sm text-gray-500">{{ $testimonial->role }}</p>
                    @endif
                    <div class="flex items-center gap-1 mt-1">
                        @for($i = 1; $i <= 5; $i++)
                        <svg class="w-4 h-4 {{ $i <= $testimonial->rating ? 'text-amber-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        @endfor
                    </div>
                </div>
                <span class="badge {{ $testimonial->is_active ? 'badge-success' : 'badge-danger' }} text-xs">
                    {{ $testimonial->is_active ? 'Active' : 'Inactive' }}
                </span>
            </div>
            <p class="text-gray-600 text-sm mb-3 line-clamp-2">"{{ Str::limit($testimonial->text, 100) }}"</p>
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn-admin btn-admin-secondary text-xs flex-1 justify-center">
                    Edit
                </a>
                <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" onsubmit="return confirm('Delete this testimonial?')">
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
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
            </svg>
            <p class="text-gray-500">No testimonials found</p>
            <a href="{{ route('admin.testimonials.create') }}" class="text-red-600 hover:underline mt-2 inline-block text-sm">Add your first testimonial →</a>
        </div>
        @endforelse
    </div>

    <!-- Desktop Table View -->
    <div class="hidden lg:block bg-white rounded-xl shadow-sm overflow-hidden">
        <div class="table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Review</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($testimonials as $testimonial)
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center text-white font-bold overflow-hidden">
                                    @if($testimonial->avatar)
                                    <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="{{ $testimonial->name }}" class="w-full h-full object-cover">
                                    @else
                                    {{ substr($testimonial->name, 0, 1) }}
                                    @endif
                                </div>
                                <div>
                                    <div class="font-medium">{{ $testimonial->name }}</div>
                                    @if($testimonial->role)
                                    <div class="text-xs text-gray-500">{{ $testimonial->role }}</div>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="max-w-xs">
                            <p class="text-sm text-gray-600 truncate">"{{ Str::limit($testimonial->text, 60) }}"</p>
                        </td>
                        <td>
                            <div class="flex items-center gap-1">
                                @for($i = 1; $i <= 5; $i++)
                                <svg class="w-4 h-4 {{ $i <= $testimonial->rating ? 'text-amber-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                @endfor
                            </div>
                        </td>
                        <td>
                            <span class="badge {{ $testimonial->is_active ? 'badge-success' : 'badge-danger' }}">
                                {{ $testimonial->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn-admin btn-admin-secondary text-xs">
                                    Edit
                                </a>
                                <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" onsubmit="return confirm('Delete this testimonial?')">
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                            </svg>
                            <p class="text-gray-500">No testimonials found</p>
                            <a href="{{ route('admin.testimonials.create') }}" class="text-red-600 hover:underline mt-2 inline-block text-sm">Add your first testimonial →</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6">
        {{ $testimonials->links() }}
    </div>
</x-layouts.admin>
