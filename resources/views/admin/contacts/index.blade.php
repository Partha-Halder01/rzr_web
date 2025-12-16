<x-layouts.admin>
    @php $header = 'Messages'; @endphp
    
    <div class="flex items-center justify-between mb-6">
        <p class="text-gray-500 text-sm lg:text-base">View and manage contact messages</p>
    </div>

    <!-- Mobile Card View -->
    <div class="lg:hidden space-y-3">
        @forelse($contacts as $contact)
        <div class="bg-white rounded-xl shadow-sm p-4 {{ !$contact->is_read ? 'border-l-4 border-red-500' : '' }}">
            <div class="flex items-start justify-between gap-3 mb-3">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full {{ $contact->is_read ? 'bg-gray-100' : 'bg-red-100' }} flex items-center justify-center flex-shrink-0">
                        <span class="{{ $contact->is_read ? 'text-gray-600' : 'text-red-600' }} font-semibold text-sm">{{ substr($contact->name, 0, 1) }}</span>
                    </div>
                    <div class="min-w-0">
                        <h3 class="font-medium text-gray-900 text-sm">{{ $contact->name }}</h3>
                        <p class="text-xs text-gray-500 truncate">{{ $contact->email }}</p>
                    </div>
                </div>
                <span class="badge {{ $contact->is_read ? 'badge-success' : 'badge-warning' }} text-xs">
                    {{ $contact->is_read ? 'Read' : 'New' }}
                </span>
            </div>
            <p class="text-sm text-gray-800 font-medium mb-1">{{ $contact->subject ?: 'No subject' }}</p>
            <p class="text-xs text-gray-400 mb-3">{{ $contact->created_at->format('M d, Y h:i A') }}</p>
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.contacts.show', $contact) }}" class="btn-admin btn-admin-primary text-xs flex-1 justify-center">
                    View Message
                </a>
                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Delete this message?')">
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
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <p class="text-gray-500">No messages yet</p>
        </div>
        @endforelse
    </div>

    <!-- Desktop Table View -->
    <div class="hidden lg:block bg-white rounded-xl shadow-sm overflow-hidden">
        <div class="table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>From</th>
                        <th>Subject</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $contact)
                    <tr class="{{ !$contact->is_read ? 'bg-red-50' : '' }}">
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full {{ $contact->is_read ? 'bg-gray-100' : 'bg-red-100' }} flex items-center justify-center flex-shrink-0">
                                    <span class="{{ $contact->is_read ? 'text-gray-600' : 'text-red-600' }} font-medium text-xs">{{ substr($contact->name, 0, 1) }}</span>
                                </div>
                                <div class="min-w-0">
                                    <h3 class="font-medium text-gray-900 text-sm truncate">{{ $contact->name }}</h3>
                                    <p class="text-xs text-gray-500 truncate max-w-[150px]">{{ $contact->email }}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-gray-900 text-sm truncate block max-w-[200px]">{{ $contact->subject ?: 'No subject' }}</span>
                        </td>
                        <td>
                            <span class="text-xs text-gray-500">{{ $contact->created_at->format('M d, Y') }}</span>
                        </td>
                        <td>
                            <span class="badge {{ $contact->is_read ? 'badge-success' : 'badge-warning' }}">
                                {{ $contact->is_read ? 'Read' : 'New' }}
                            </span>
                        </td>
                        <td>
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.contacts.show', $contact) }}" class="btn-admin btn-admin-secondary text-xs">
                                    View
                                </a>
                                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Delete this message?')">
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
                        <td colspan="5" class="text-center py-12">
                            <svg class="w-12 h-12 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <p class="text-gray-500">No messages yet</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6">
        {{ $contacts->links() }}
    </div>
</x-layouts.admin>
