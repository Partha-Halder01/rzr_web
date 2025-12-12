<x-layouts.admin>
    @php $header = 'Edit Product'; @endphp
    
    <div class="max-w-2xl">
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-4 lg:p-6 border-b border-gray-100">
                <h2 class="text-lg font-semibold text-gray-900">Edit Product</h2>
                <p class="text-sm text-gray-500 mt-1">Update the product information below.</p>
            </div>
            
            <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data" class="p-4 lg:p-6 space-y-5">
                @csrf
                @method('PUT')
                
                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">Category *</label>
                    <select id="category_id" name="category_id" required class="admin-input">
                        <option value="">Select a category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Product Name *</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required class="admin-input">
                    @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="specifications" class="block text-sm font-medium text-gray-700 mb-2">Specifications</label>
                    <input type="text" id="specifications" name="specifications" value="{{ old('specifications', $product->specifications) }}" class="admin-input">
                    @error('specifications')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea id="description" name="description" rows="3" class="admin-input">{{ old('description', $product->description) }}</textarea>
                    @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Product Image</label>
                    @if($product->image)
                    <div class="mb-3 p-3 bg-gray-50 rounded-lg flex items-center gap-3">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-14 h-14 rounded-lg object-cover">
                        <div>
                            <p class="text-sm text-gray-600">Current image</p>
                            <p class="text-xs text-gray-400">Upload new to replace</p>
                        </div>
                    </div>
                    @endif
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center hover:border-red-400 transition-colors">
                        <input type="file" id="image" name="image" accept="image/*" class="hidden" onchange="updateFileName(this)">
                        <label for="image" class="cursor-pointer text-sm text-red-600 hover:underline">Tap to upload new image</label>
                        <p class="text-xs text-gray-400 mt-1" id="file-name">PNG, JPG up to 2MB</p>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                    <label class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $product->is_active) ? 'checked' : '' }} class="w-5 h-5 text-red-600 rounded border-gray-300">
                        <span class="text-sm text-gray-700">Active (visible on website)</span>
                    </label>
                </div>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-4 border-t border-gray-100">
                    <button type="submit" class="btn-admin btn-admin-primary w-full sm:w-auto justify-center">
                        Update Product
                    </button>
                    <a href="{{ route('admin.products.index') }}" class="btn-admin btn-admin-secondary w-full sm:w-auto justify-center">Cancel</a>
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
