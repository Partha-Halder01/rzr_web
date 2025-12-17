<x-layouts.admin>
    @php $header = 'Edit Testimonial'; @endphp
    
    <div class="max-w-2xl">
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-4 lg:p-6 border-b border-gray-100">
                <h2 class="text-lg font-semibold text-gray-900">Edit Testimonial</h2>
                <p class="text-sm text-gray-500 mt-1">Update the customer review information.</p>
            </div>
            
            <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data" class="p-4 lg:p-6 space-y-5">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Customer Name *</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $testimonial->name) }}" required
                            class="admin-input" placeholder="e.g., Rajesh Kumar">
                        @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="role" class="block text-sm font-medium text-gray-700 mb-2">Role/Title</label>
                        <input type="text" id="role" name="role" value="{{ old('role', $testimonial->role) }}"
                            class="admin-input" placeholder="e.g., Fleet Owner, Delhi">
                        @error('role')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="text" class="block text-sm font-medium text-gray-700 mb-2">Review Text *</label>
                    <textarea id="text" name="text" rows="4" required class="admin-input" placeholder="Write the customer's testimonial here...">{{ old('text', $testimonial->text) }}</textarea>
                    @error('text')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">Rating *</label>
                        <select id="rating" name="rating" required class="admin-input">
                            <option value="5" {{ old('rating', $testimonial->rating) == 5 ? 'selected' : '' }}>⭐⭐⭐⭐⭐ (5 Stars)</option>
                            <option value="4" {{ old('rating', $testimonial->rating) == 4 ? 'selected' : '' }}>⭐⭐⭐⭐ (4 Stars)</option>
                            <option value="3" {{ old('rating', $testimonial->rating) == 3 ? 'selected' : '' }}>⭐⭐⭐ (3 Stars)</option>
                            <option value="2" {{ old('rating', $testimonial->rating) == 2 ? 'selected' : '' }}>⭐⭐ (2 Stars)</option>
                            <option value="1" {{ old('rating', $testimonial->rating) == 1 ? 'selected' : '' }}>⭐ (1 Star)</option>
                        </select>
                        @error('rating')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="avatar" class="block text-sm font-medium text-gray-700 mb-2">Customer Photo</label>
                        @if($testimonial->avatar)
                        <div class="mb-3 flex items-center gap-4">
                            <div class="w-16 h-16 rounded-full overflow-hidden bg-gray-100">
                                <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="{{ $testimonial->name }}" class="w-full h-full object-cover">
                            </div>
                            <span class="text-sm text-gray-500">Current photo</span>
                        </div>
                        @endif
                        <input type="file" id="avatar" name="avatar" accept="image/*"
                            class="admin-input file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200">
                        <p class="mt-1 text-xs text-gray-500">Upload new photo to replace current one.</p>
                        @error('avatar')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label>
                        <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $testimonial->sort_order) }}" min="0" class="admin-input">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <label class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }} class="w-5 h-5 text-red-600 rounded border-gray-300">
                            <span class="text-sm text-gray-700">Active</span>
                        </label>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-4 border-t border-gray-100">
                    <button type="submit" class="btn-admin btn-admin-primary w-full sm:w-auto justify-center">
                        Update Testimonial
                    </button>
                    <a href="{{ route('admin.testimonials.index') }}" class="btn-admin btn-admin-secondary w-full sm:w-auto justify-center">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin>
