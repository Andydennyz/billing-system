@extends('layouts.app')

@section('content')
<div class="space-y-6">

    <h1 class="text-2xl font-semibold">Data Usage</h1>
    <p class="text-sm text-neutral-400">Track how much data your customers are consuming over time.</p>

    <div class="card">
        <h2 class="font-semibold mb-3">Data Usage</h2>
        <canvas id="dataUsageChart" height="120"></canvas>
    </div>

</div>
@endsection