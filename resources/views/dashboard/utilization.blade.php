@extends('layouts.app')

@section('content')

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

<div class="card">
<h2 class="text-lg font-semibold">Package Utilization</h2>
<p class="text-sm text-gray-400 mb-4">Distribution of packages in use.</p>

<canvas id="utilizationChart"></canvas>

</div>

</div>

@endsection