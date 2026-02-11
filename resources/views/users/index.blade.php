@extends('layouts.app')

@section('content')

<!-- Header -->
<div class="flex justify-between items-start mb-6">
    <div>
        <h1 class="text-2xl font-semibold">Users</h1>
        <p class="text-sm text-neutral-400">
            All users including hotspot and PPPoE users
        </p>
    </div>

    <div class="flex gap-3">
        <button class="px-4 py-2 rounded-lg border border-orange-400 text-orange-400 text-sm">
            ⬆ Import Users
        </button>
        <button class="px-4 py-2 rounded-lg bg-orange-500 text-black text-sm font-medium">
            ➕ Create User
        </button>
    </div>
</div>

<!-- Filters -->
<div class="flex items-center gap-6 border-b border-neutral-800 mb-6">
    @foreach (['All', 'Hotspot', 'PPPoE', 'Paused', 'Offline'] as $filter)
        <button class="pb-3 text-sm text-orange-400 border-b-2 border-orange-400 flex items-center gap-2">
            {{ $filter }}
            <span class="bg-neutral-800 px-2 py-0.5 rounded-full text-xs">0</span>
        </button>
    @endforeach
</div>

<!-- Card -->
<div class="bg-neutral-900 rounded-xl p-6 flex-1 flex flex-col">

    <!-- Search -->
    <div class="flex justify-end mb-4">
        <input
            type="text"
            placeholder="Search"
            class="bg-neutral-800 text-sm px-4 py-2 rounded-lg outline-none"
        >
    </div>

    <!-- Table -->
    <div class="overflow-x-auto flex-1">
        <table class="w-full text-sm">
            <thead class="text-neutral-400 border-b border-neutral-800">
                <tr>
                    <th class="text-left py-3">Username</th>
                    <th class="text-left py-3">Phone</th>
                    <th class="text-left py-3">Package</th>
                    <th class="text-left py-3">Expiry</th>
                    <th class="text-left py-3">Status</th>
                    <th class="text-left py-3">Last Online</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td colspan="6" class="py-20 text-center text-neutral-400">
                        <div class="flex flex-col items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-neutral-800 flex items-center justify-center">
                                👤
                            </div>
                            <p class="font-medium">No users found</p>
                            <p class="text-xs">
                                Add a new user by clicking the button above
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection
