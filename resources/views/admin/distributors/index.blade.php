<x-layouts.admin>
    @php $header = 'Distributor Applications'; @endphp
    
    <div class="flex items-center justify-between mb-6">
        <p class="text-gray-500 text-sm lg:text-base">View and manage distributor applications</p>
    </div>

    @if(session('success'))
    <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 text-sm">
        {{ session('success') }}
    </div>
    @endif

    <!-- Mobile Card View -->
    <div class="lg:hidden space-y-3">
        @forelse($applications as $application)
        <div class="bg-white rounded-xl shadow-sm p-4 {{ !$application->is_read ? 'border-l-4 border-orange-500' : '' }}">
            <div class="flex items-start justify-between gap-3 mb-3">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full {{ $application->is_read ? 'bg-gray-100' : 'bg-orange-100' }} flex items-center justify-center flex-shrink-0">
                        <span class="{{ $application->is_read ? 'text-gray-600' : 'text-orange-600' }} font-semibold text-sm">{{ substr($application->name, 0, 1) }}</span>
                    </div>
                    <div class="min-w-0">
                        <h3 class="font-medium text-gray-900 text-sm">{{ $application->name }}</h3>
                        <p class="text-xs text-gray-500 truncate">{{ $application->email }}</p>
                    </div>
                </div>
                @if($application->status === 'pending')
                    <span class="badge badge-warning text-xs">Pending</span>
                @elseif($application->status === 'approved')
                    <span class="badge badge-success text-xs">Approved</span>
                @else
                    <span class="badge badge-danger text-xs">Rejected</span>
                @endif
            </div>
            <div class="space-y-1 mb-3">
                <p class="text-sm text-gray-800 font-medium">{{ $application->company_name }}</p>
                <p class="text-xs text-gray-500">📍 {{ $application->city }}, {{ $application->state }}</p>
                <p class="text-xs text-gray-400">{{ $application->created_at->format('M d, Y') }}</p>
            </div>
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.distributors.show', $application) }}" class="btn-admin btn-admin-primary text-xs flex-1 justify-center">
                    View Details
                </a>
                <form action="{{ route('admin.distributors.destroy', $application) }}" method="POST" onsubmit="return confirm('Delete this application?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-admin btn-admin-danger p-2">
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
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <p class="text-gray-500">No distributor applications yet</p>
        </div>
        @endforelse
    </div>

    <!-- Desktop Table View -->
    <div class="hidden lg:block bg-white rounded-xl shadow-sm overflow-hidden">
        <div class="table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Applicant</th>
                        <th>Company</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($applications as $application)
                    <tr class="{{ !$application->is_read ? 'bg-orange-50' : '' }}">
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full {{ $application->is_read ? 'bg-gray-100' : 'bg-orange-100' }} flex items-center justify-center flex-shrink-0">
                                    <span class="{{ $application->is_read ? 'text-gray-600' : 'text-orange-600' }} font-medium text-xs">{{ substr($application->name, 0, 1) }}</span>
                                </div>
                                <div class="min-w-0">
                                    <h3 class="font-medium text-gray-900 text-sm truncate">{{ $application->name }}</h3>
                                    <p class="text-xs text-gray-500 truncate max-w-[150px]">{{ $application->email }}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-gray-900 text-sm truncate block max-w-[150px]">{{ $application->company_name }}</span>
                        </td>
                        <td>
                            <span class="text-gray-600 text-sm">{{ $application->city }}, {{ $application->state }}</span>
                        </td>
                        <td>
                            <span class="text-xs text-gray-500">{{ $application->created_at->format('M d, Y') }}</span>
                        </td>
                        <td>
                            @if($application->status === 'pending')
                                <span class="badge badge-warning">Pending</span>
                            @elseif($application->status === 'approved')
                                <span class="badge badge-success">Approved</span>
                            @else
                                <span class="badge badge-danger">Rejected</span>
                            @endif
                        </td>
                        <td>
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.distributors.show', $application) }}" class="btn-admin btn-admin-secondary text-xs">
                                    View
                                </a>
                                <form action="{{ route('admin.distributors.destroy', $application) }}" method="POST" onsubmit="return confirm('Delete this application?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-admin btn-admin-danger p-2">
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
                        <td colspan="6" class="text-center py-12">
                            <svg class="w-12 h-12 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <p class="text-gray-500">No distributor applications yet</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6">
        {{ $applications->links() }}
    </div>
</x-layouts.admin>
