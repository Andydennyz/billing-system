@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <h1 class="text-2xl font-semibold text-white">Active Users Chart</h1>

    <div class="bg-neutral-900 rounded-xl p-6 h-[420px]">
        <h2 class="text-lg font-semibold text-white mb-4">Active Users</h2>

        <div class="relative h-[300px]">
            <canvas id="activeUsersChart"></canvas>
        </div>
    </div>
</div>
@endsection
