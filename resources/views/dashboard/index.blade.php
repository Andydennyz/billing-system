@extends('layouts.app')

@section('content')
<div class="space-y-6">
    @include('dashboard.header')

    <h1 class="text-2xl font-semibold">Astrid Billing Dashboard</h1>

    @include('dashboard.stats')

    <div class="bg-neutral-900 rounded-xl p-6">
        <h2 class="text-lg font-semibold text-white mb-2">Charts</h2>
        <p class="text-sm text-neutral-400 mb-4">
            Use the sidebar links under Dashboard to open each chart page independently.
        </p>

        <div class="flex flex-wrap gap-3">
            <a href="{{ route('dashboard.active-users') }}" class="sidebar-item active">Open Active Users Chart</a>
            <a href="{{ route('dashboard.payments') }}" class="sidebar-item active">Open Payments Chart</a>
        </div>
    </div>

    @include('dashboard.activity')
</div>
@endsection
