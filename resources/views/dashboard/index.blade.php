@extends('layouts.app')

@section('content')
<div class="space-y-6">

    {{-- Greeting + header --}}
    <h1 class="text-2xl font-semibold">Billing Dashboard</h1>

    {{-- Stats cards --}}
    @include('dashboard.stats')

    {{-- Charts --}}
    @include('dashboard.charts')

    {{-- Active users --}}
    @include('dashboard.activity')

</div>
@endsection
