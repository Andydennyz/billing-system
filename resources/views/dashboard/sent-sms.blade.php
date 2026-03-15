@extends('layouts.app')

@section('content')

<div class="w-full">

    <div class="bg-neutral-900 rounded-xl shadow p-6 w-full">

        <div class="flex justify-between items-center mb-6">

            <div>
                <h2 class="text-lg font-semibold text-white">
                    Sent SMS
                </h2>

                <p class="text-sm text-gray-400">
                    SMS sent from the system.
                </p>
            </div>

            <select class="bg-neutral-800 text-gray-300 text-sm rounded px-3 py-1">
                <option>This week</option>
            </select>

        </div>

        <div class="w-full h-[500px]">
            <canvas id="smsChart"></canvas>
        </div>

    </div>

</div>

@endsection