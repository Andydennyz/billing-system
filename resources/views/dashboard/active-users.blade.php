@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <h1 class="text-2xl font-semibold text-white">Active Users Chart</h1>

    <div class="bg-neutral-900 rounded-xl p-6 h-[420px]">
        <canvas id="activeUsersChart"></canvas>
    </div>
</div>
@endsection

@push('scripts')
    @vite('resources/js/charts/activeUsersChart.js')
@endpush
