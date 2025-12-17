<x-layouts.admin>
    @php $header = 'Edit Partner Brand'; @endphp
    
    <div class="max-w-2xl">
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-4 lg:p-6 border-b border-gray-100">
                <h2 class="text-lg font-semibold text-gray-900">Edit Brand Details</h2>
                <p class="text-sm text-gray-500 mt-1">Update the partner brand information.</p>
            </div>
            
            <form action="{{ route('admin.partner-brands.update', $partnerBrand) }}" method="POST" enctype="multipart/form-data" class="p-4 lg:p-6 space-y-5">
                @csrf
                @method('PUT')
                
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Brand Name *</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $partnerBrand->name) }}" required
                        class="admin-input" placeholder="e.g., Toyota, Honda, Tata">
                    @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="logo" class="block text-sm font-medium text-gray-700 mb-2">Brand Logo</label>
                    @if($partnerBrand->logo)
                    <div class="mb-3 flex items-center gap-4">
                        <div class="w-20 h-20 rounded-lg bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('storage/' . $partnerBrand->logo) }}" alt="{{ $partnerBrand->name }}" class="w-full h-full object-contain p-2">
                        </div>
                        <span class="text-sm text-gray-500">Current logo</span>
                    </div>
                    @endif
                    <input type="file" id="logo" name="logo" accept="image/*"
                        class="admin-input file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200">
                    <p class="mt-1 text-xs text-gray-500">Upload new logo to replace current one. Leave empty to keep existing.</p>
                    @error('logo')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="color" class="block text-sm font-medium text-gray-700 mb-2">Brand Color</label>
                    <div class="flex items-center gap-3">
                        <input type="color" id="color" name="color" value="{{ old('color', $partnerBrand->color) }}"
                            class="w-12 h-12 rounded-lg border border-gray-200 cursor-pointer">
                        <input type="text" id="color_text" value="{{ old('color', $partnerBrand->color) }}"
                            class="admin-input flex-1" placeholder="#4B5563" onchange="document.getElementById('color').value = this.value">
                    </div>
                    @error('color')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label>
                        <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $partnerBrand->sort_order) }}" min="0" class="admin-input">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <label class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $partnerBrand->is_active) ? 'checked' : '' }} class="w-5 h-5 text-red-600 rounded border-gray-300">
                            <span class="text-sm text-gray-700">Active</span>
                        </label>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-4 border-t border-gray-100">
                    <button type="submit" class="btn-admin btn-admin-primary w-full sm:w-auto justify-center">
                        Update Brand
                    </button>
                    <a href="{{ route('admin.partner-brands.index') }}" class="btn-admin btn-admin-secondary w-full sm:w-auto justify-center">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('color').addEventListener('change', function() {
            document.getElementById('color_text').value = this.value;
        });
    </script>
</x-layouts.admin>
