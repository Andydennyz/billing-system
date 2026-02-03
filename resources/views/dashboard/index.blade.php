@extends('layouts.app')

@section('content')
<div class="space-y-6">
        {{--Header --}}
    @include('dashboard.header')

    {{-- Greeting + header --}}
    <h1 class="text-2xl font-semibold">Astrid Billing Dashboard</h1>

    {{-- Stats cards --}}
    @include('dashboard.stats')

    {{-- Charts --}}
    @include('dashboard.charts')

    {{-- Active users --}}
    @include('dashboard.activity')

</div>
@endsection
