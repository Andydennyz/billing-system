@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Dashboard
</h1>

<!-- Stats -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-gray-500 text-sm">Total Revenue</p>
        <p class="text-xl font-semibold">KES 120,000</p>
    </div>

    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-gray-500 text-sm">Invoices</p>
        <p class="text-xl font-semibold">34</p>
    </div>

    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-gray-500 text-sm">Clients</p>
        <p class="text-xl font-semibold">12</p>
    </div>
</div>

<!-- Chart -->
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-lg font-semibold mb-4">
        Payments Overview
    </h2>

    <canvas id="paymentsChart" height="100"></canvas>
</div>

@endsection
