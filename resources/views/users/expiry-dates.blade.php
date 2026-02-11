@extends('layouts.app')

@section('content')
<div class="flex flex-col flex-1">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-xl font-semibold text-white">Expiry Dates</h1>

        <div class="flex gap-3">
            <button class="btn-secondary">📅 Compensate clients</button>
            <button class="btn-primary">⏰ Create Expiry Date</button>
        </div>
    </div>

    <!-- Table Card -->
    <div class="card flex-1 flex flex-col">
        <div class="card-header flex justify-between items-center">
            <div class="table-head">User</div>
            <div class="table-head">Expiry Date</div>
            <div class="table-head">Grace Period</div>
        </div>

        <!-- Empty State -->
        <div class="flex-1 flex flex-col items-center justify-center text-center text-gray-400">
            <div class="text-3xl mb-3">✖</div>
            <h3 class="text-lg font-medium text-white">No schedulers</h3>
            <p>You have not created any expiry dates yet.</p>
        </div>
    </div>
</div>
@endsection
