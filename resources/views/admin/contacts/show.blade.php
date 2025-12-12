<x-layouts.admin>
    @php $header = 'View Message'; @endphp
    
    <div class="max-w-3xl">
        <a href="{{ route('admin.contacts.index') }}" class="inline-flex items-center gap-2 text-gray-500 hover:text-red-600 mb-4 lg:mb-6 text-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Back to Messages
        </a>

        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <!-- Header -->
            <div class="p-4 lg:p-6 border-b border-gray-100">
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                            <span class="text-red-600 font-bold text-sm lg:text-lg">{{ substr($contact->name, 0, 1) }}</span>
                        </div>
                        <div class="min-w-0">
                            <h2 class="text-lg lg:text-xl font-semibold text-gray-900 truncate">{{ $contact->name }}</h2>
                            <p class="text-gray-500 text-sm truncate">{{ $contact->email }}</p>
                        </div>
                    </div>
                    <span class="text-xs lg:text-sm text-gray-400">{{ $contact->created_at->format('M d, Y \a\t h:i A') }}</span>
                </div>
            </div>

            <!-- Contact Details -->
            <div class="p-4 lg:p-6 bg-gray-50 border-b border-gray-100 grid grid-cols-2 sm:grid-cols-3 gap-4">
                @if($contact->phone)
                <div>
                    <span class="text-xs text-gray-500 uppercase tracking-wide">Phone</span>
                    <p class="font-medium text-gray-900 text-sm mt-1">{{ $contact->phone }}</p>
                </div>
                @endif
                <div>
                    <span class="text-xs text-gray-500 uppercase tracking-wide">Subject</span>
                    <p class="font-medium text-gray-900 text-sm mt-1 truncate">{{ $contact->subject ?: 'No subject' }}</p>
                </div>
                <div>
                    <span class="text-xs text-gray-500 uppercase tracking-wide">Status</span>
                    <p class="mt-1">
                        <span class="badge badge-success">Read</span>
                    </p>
                </div>
            </div>

            <!-- Message Content -->
            <div class="p-4 lg:p-6">
                <h3 class="text-xs text-gray-500 uppercase tracking-wide mb-3">Message</h3>
                <div class="p-4 bg-gray-50 rounded-lg">
                    <p class="text-gray-700 whitespace-pre-wrap leading-relaxed text-sm lg:text-base">{{ $contact->message }}</p>
                </div>
            </div>

            <!-- Actions -->
            <div class="p-4 lg:p-6 bg-gray-50 border-t border-gray-100 flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject }}" class="btn-admin btn-admin-primary w-full sm:w-auto justify-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l9 6 9-6M21 10v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8"/>
                    </svg>
                    Reply via Email
                </a>
                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Delete this message?')" class="w-full sm:w-auto">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-admin btn-admin-danger w-full justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
