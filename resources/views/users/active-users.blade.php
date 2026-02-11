@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-semibold mb-6">Active Users</h1>

<!-- Filters -->
<div class="flex items-center gap-6 border-b border-neutral-800 mb-6">
    @foreach (['All', 'Hotspot', 'PPPoE', 'Without Expiry'] as $filter)
        <button class="pb-3 text-sm text-orange-400 border-b-2 border-orange-400">
            {{ $filter }} <span class="ml-1 bg-neutral-800 px-2 py-0.5 rounded-full">0</span>
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
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="text-neutral-400 border-b border-neutral-800">
                <tr>
                    <th class="text-left py-3">Username</th>
                    <th class="text-left py-3">IP / MAC</th>
                    <th class="text-left py-3">Router</th>
                    <th class="text-left py-3">Session Start</th>
                    <th class="text-left py-3">Session End</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td colspan="5" class="py-16 text-center text-neutral-400">
                        <div class="flex flex-col items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-neutral-800 flex items-center justify-center">
                                ⚡
                            </div>
                            <p class="font-medium">No Active Users</p>
                            <p class="text-xs">There are no active users at the moment.</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection
