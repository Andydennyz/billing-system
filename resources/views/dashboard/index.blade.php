@extends('layouts.app')

@section('content')
<div class="space-y-6">
    {{-- Header --}}
    @include('dashboard.header')

    {{-- Greeting + header --}}
    <h1 class="text-2xl font-semibold">Astrid Billing Dashboard</h1>

    {{-- Stats cards --}}
    @include('dashboard.stats')

    {{-- Charts (Payments ONLY) --}}
    @include('dashboard.charts')  

    {{-- ❌ REMOVE Active Users from dashboard --}}
    {{-- @include('dashboard.activity') --}}
</div>
@endsection
