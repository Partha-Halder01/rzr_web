<x-layouts.admin>
    @php $header = 'Add Category'; @endphp
    
    <div class="max-w-2xl">
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-4 lg:p-6 border-b border-gray-100">
                <h2 class="text-lg font-semibold text-gray-900">Category Details</h2>
                <p class="text-sm text-gray-500 mt-1">Fill in the information to create a new category.</p>
            </div>
            
            <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data" class="p-4 lg:p-6 space-y-5">
                @csrf
                
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Category Name *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                        class="admin-input" placeholder="e.g., Motorcycle Oils">
                    @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea id="description" name="description" rows="3" class="admin-input" placeholder="Brief description">{{ old('description') }}</textarea>
                    @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Category Image</label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 lg:p-6 text-center hover:border-red-400 transition-colors">
                        <svg class="w-8 h-8 mx-auto text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <input type="file" id="image" name="image" accept="image/*" class="hidden" onchange="updateFileName(this)">
                        <label for="image" class="cursor-pointer text-sm text-red-600 hover:underline">Tap to upload</label>
                        <p class="text-xs text-gray-400 mt-1" id="file-name">PNG, JPG up to 2MB</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label>
                        <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" min="0" class="admin-input">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <label class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} class="w-5 h-5 text-red-600 rounded border-gray-300">
                            <span class="text-sm text-gray-700">Active</span>
                        </label>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-4 border-t border-gray-100">
                    <button type="submit" class="btn-admin btn-admin-primary w-full sm:w-auto justify-center">
                        Create Category
                    </button>
                    <a href="{{ route('admin.categories.index') }}" class="btn-admin btn-admin-secondary w-full sm:w-auto justify-center">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function updateFileName(input) {
            const fileName = input.files[0]?.name || 'PNG, JPG up to 2MB';
            document.getElementById('file-name').textContent = fileName;
        }
    </script>
</x-layouts.admin>
