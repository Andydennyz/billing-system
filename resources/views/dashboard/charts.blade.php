<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div class="bg-neutral-900 rounded-xl p-6 h-[420px]">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold text-white">Payments</h2>

            <select class="bg-neutral-800 text-sm text-white rounded px-3 py-1">
                <option>This year</option>
                <option>This month</option>
                <option>This week</option>
            </select>
        </div>

        <div class="relative h-[300px]">
            <canvas id="paymentsChart"></canvas>
        </div>
    </div>

    <div class="bg-neutral-900 rounded-xl p-6 h-[420px]">
        <h2 class="text-lg font-semibold text-white mb-4">Active Users</h2>

        <div class="relative h-[300px]">
            <canvas id="activeUsersChart"></canvas>
        </div>
    </div>
</div>
