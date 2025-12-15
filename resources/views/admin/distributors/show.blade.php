<x-layouts.admin>
    @php $header = 'Application Details'; @endphp
    
    <div class="flex items-center justify-between mb-6">
        <a href="{{ route('admin.distributors.index') }}" class="text-gray-500 hover:text-gray-700 flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Back to Applications
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6">
        {{ session('success') }}
    </div>
    @endif

    <div class="grid lg:grid-cols-3 gap-6">
        <!-- Main Info -->
        <div class="lg:col-span-2 space-y-6">
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Applicant Information</h3>
                <div class="grid sm:grid-cols-2 gap-4">
                    <div>
                        <label class="text-xs text-gray-500 uppercase tracking-wider">Full Name</label>
                        <p class="text-gray-900 font-medium">{{ $application->name }}</p>
                    </div>
                    <div>
                        <label class="text-xs text-gray-500 uppercase tracking-wider">Email</label>
                        <p class="text-gray-900">{{ $application->email }}</p>
                    </div>
                    <div>
                        <label class="text-xs text-gray-500 uppercase tracking-wider">Phone</label>
                        <p class="text-gray-900">{{ $application->phone }}</p>
                    </div>
                    <div>
                        <label class="text-xs text-gray-500 uppercase tracking-wider">Company Name</label>
                        <p class="text-gray-900 font-medium">{{ $application->company_name }}</p>
                    </div>
                    <div>
                        <label class="text-xs text-gray-500 uppercase tracking-wider">City</label>
                        <p class="text-gray-900">{{ $application->city }}</p>
                    </div>
                    <div>
                        <label class="text-xs text-gray-500 uppercase tracking-wider">State</label>
                        <p class="text-gray-900">{{ $application->state }}</p>
                    </div>
                    <div>
                        <label class="text-xs text-gray-500 uppercase tracking-wider">Industry Experience</label>
                        <p class="text-gray-900">{{ $application->experience ?: 'Not specified' }}</p>
                    </div>
                    <div>
                        <label class="text-xs text-gray-500 uppercase tracking-wider">Applied On</label>
                        <p class="text-gray-900">{{ $application->created_at->format('M d, Y h:i A') }}</p>
                    </div>
                </div>
            </div>

            @if($application->message)
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Message</h3>
                <p class="text-gray-700 whitespace-pre-wrap">{{ $application->message }}</p>
            </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Status Card -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Application Status</h3>
                <div class="mb-4">
                    @if($application->status === 'pending')
                        <span class="px-3 py-1.5 bg-yellow-100 text-yellow-700 rounded-full text-sm font-medium">Pending Review</span>
                    @elseif($application->status === 'approved')
                        <span class="px-3 py-1.5 bg-green-100 text-green-700 rounded-full text-sm font-medium">Approved</span>
                    @else
                        <span class="px-3 py-1.5 bg-red-100 text-red-700 rounded-full text-sm font-medium">Rejected</span>
                    @endif
                </div>
                
                <form action="{{ route('admin.distributors.updateStatus', $application) }}" method="POST" class="space-y-3">
                    @csrf
                    @method('PATCH')
                    <select name="status" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                        <option value="pending" {{ $application->status === 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="approved" {{ $application->status === 'approved' ? 'selected' : '' }}>Approved</option>
                        <option value="rejected" {{ $application->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>
                    <button type="submit" class="w-full btn-admin btn-admin-primary">
                        Update Status
                    </button>
                </form>
            </div>

            <!-- Actions Card -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
                <div class="space-y-3">
                    <a href="mailto:{{ $application->email }}" class="w-full btn-admin btn-admin-secondary flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Send Email
                    </a>
                    <a href="tel:{{ $application->phone }}" class="w-full btn-admin btn-admin-secondary flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Call Applicant
                    </a>
                    <form action="{{ route('admin.distributors.destroy', $application) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this application?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full btn-admin btn-admin-danger flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            Delete Application
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
