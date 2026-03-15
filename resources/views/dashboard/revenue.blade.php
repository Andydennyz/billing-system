@extends('layouts.app')

@section('content')

<div class="w-full">

    <div class="bg-neutral-900 rounded-xl shadow p-6 w-full">

        <div class="mb-6">
            <h2 class="text-xl font-semibold text-white">
                Revenue Forecast (3 months)
            </h2>

            <p class="text-gray-400 text-sm">
                How much revenue will you expect to generate in the next 3 months?
            </p>
        </div>

        <div class="w-full h-[500px]">
            <canvas id="revenueChart"></canvas>
        </div>

    </div>

</div>

@endsection