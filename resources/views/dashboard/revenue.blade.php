@extends('layouts.app')

@section('content')

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

<div class="card">
<h2 class="text-lg font-semibold">Revenue Forecast (3 months)</h2>
<p class="text-sm text-gray-400 mb-4">
How much revenue will you expect to generate in the next 3 months?
</p>

<canvas id="revenueChart"></canvas>

</div>

</div>

@endsection