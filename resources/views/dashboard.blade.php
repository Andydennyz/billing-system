@extends('layouts.app')

@section('content')

<!-- Page Title -->
<h1 class="text-2xl font-bold text-white mb-6">
    Dashboard
</h1>

<!-- Top Stats -->
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

<!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

    <!-- Payments Chart -->
    <div class="bg-neutral-900 rounded-xl p-6 h-[420px]">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h2 class="text-white font-semibold text-lg">Payments</h2>
                <p class="text-sm text-neutral-400">
                    Payments and expenses trend.
                </p>
            </div>

            <select class="bg-neutral-800 text-sm text-white px-3 py-1 rounded-lg border border-neutral-700">
                <option>This year</option>
                <option>This month</option>
            </select>
        </div>

        <div class="relative h-[300px]">
            <canvas id="paymentsChart"></canvas>
        </div>
    </div>

    <!-- Active Users Chart -->
    <div class="bg-neutral-900 rounded-xl p-6 h-[420px]">
        <div class="flex items-start justify-between mb-4">
            <div>
                <h2 class="text-white font-semibold text-lg">Active Users</h2>
                <p class="text-sm text-neutral-400">
                    Active now: 0 users | Average: 0 | Peak: 0 this week
                </p>
            </div>

            <select class="bg-neutral-800 text-sm text-white px-3 py-1 rounded-lg border border-neutral-700">
                <option>This week</option>
                <option>This month</option>
            </select>
        </div>

        <div class="relative h-[300px]">
            <canvas id="activeUsersChart"></canvas>
        </div>
    </div>

</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const ctx = document.getElementById('paymentsChart');

        if (!ctx) return;

        // 🔥 Prevent duplicate charts
        if (window.paymentsChartInstance) {
            window.paymentsChartInstance.destroy();
        }

        window.paymentsChartInstance = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Payments (KES)',
                    data: [12000, 9000, 15000, 8000, 20000, 17000, 10000],
                    borderWidth: 2,
                    tension: 0.4,
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
            }
        });

    });
</script>
@endpush
