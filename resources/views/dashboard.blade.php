@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold text-white mb-6">
    Dashboard
</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    <div class="bg-neutral-900 p-5 rounded-xl">
        <p class="text-sm text-neutral-400">Amount this month</p>
        <p class="text-2xl font-semibold text-orange-300">Ksh 0.00</p>
    </div>

    <div class="bg-neutral-900 p-5 rounded-xl">
        <p class="text-sm text-neutral-400">SMS Balance</p>
        <p class="text-2xl font-semibold text-orange-300">Ksh 2.00</p>
    </div>

    <div class="bg-neutral-900 p-5 rounded-xl">
        <p class="text-sm text-neutral-400">Total Clients</p>
        <p class="text-2xl font-semibold text-orange-300">0</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

    <!-- Payments -->
    <div class="bg-neutral-900 rounded-xl p-6 h-[420px]">
        <h2 class="text-white font-semibold text-lg mb-4">Payments</h2>
        <div class="relative h-[300px]">
            <canvas id="paymentsChart"></canvas>
        </div>
    </div>

    <!-- Active Users -->
    <div class="bg-neutral-900 rounded-xl p-6 h-[420px]">
        <h2 class="text-white font-semibold text-lg mb-4">Active Users</h2>
        <div class="relative h-[300px]">
            <canvas id="activeUsersChart"></canvas>
        </div>
    </div>

</div>

@endsection
