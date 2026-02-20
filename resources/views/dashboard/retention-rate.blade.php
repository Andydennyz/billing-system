@extends('layouts.app')

@section('content')
<div class="space-y-6">

    <h1 class="text-2xl font-semibold">Customer Retention Rate (6 months)</h1>
    <p class="text-sm text-neutral-400">How many customers are returning and how many are churning?</p>

    <div class="card">
        <h2 class="font-semibold mb-3">Retention Rate</h2>
        <canvas id="retentionRateChart" height="120"></canvas>
    </div>

</div>
@endsection