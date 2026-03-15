@extends('layouts.app')

@section('content')

<div class="w-full h-full">

    <div class="bg-neutral-900 rounded-xl p-6 shadow h-[600px]">

        <h2 class="text-lg font-semibold text-white">
            Package Utilization
        </h2>

        <p class="text-sm text-gray-400 mb-6">
            Distribution of packages in use.
        </p>

        <div class="relative h-[500px]">
            <canvas id="utilizationChart"></canvas>
        </div>

    </div>

</div>

@endsection