@extends('layouts.app')

@section('content')

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 w-full">

    <!-- LEFT: CHART -->
    <div class="lg:col-span-2 bg-neutral-900 rounded-xl p-6 shadow">

        <div class="flex justify-between items-center mb-4">

            <div>
                <h2 class="text-white text-lg font-semibold">
                    User Registrations
                </h2>
                <p class="text-gray-400 text-sm">
                    User registrations trend.
                </p>
            </div>

            <select class="bg-neutral-800 text-gray-300 text-sm rounded px-3 py-1">
                <option>This week</option>
            </select>

        </div>

        <div class="h-[350px]">
            <canvas id="registrationChart"></canvas>
        </div>

    </div>

    <!-- RIGHT: MOST ACTIVE USERS -->
    <div class="bg-neutral-900 rounded-xl p-6 shadow">

        <h2 class="text-white text-lg font-semibold mb-1">
            Most Active Users
        </h2>

        <p class="text-gray-400 text-sm mb-4">
            The most active users in the last 30 days.
        </p>

        <!-- TABLE HEADER -->
        <div class="grid grid-cols-3 text-gray-400 text-sm border-b border-gray-700 pb-2 mb-6">
            <div>Username</div>
            <div>Data Used</div>
            <div>Phone</div>
        </div>

        <!-- EMPTY STATE -->
        <div class="flex flex-col items-center justify-center text-center mt-10">

            <div class="w-12 h-12 flex items-center justify-center rounded-full bg-neutral-800 mb-4 text-gray-500 text-xl">
                ✖
            </div>

            <p class="text-white font-medium">
                No active users
            </p>

            <p class="text-gray-400 text-sm">
                The most active users will be displayed here.
            </p>

        </div>

    </div>

</div>

@endsection