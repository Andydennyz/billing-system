@extends('layouts.app')

@section('content')
<div class="space-y-6">

    {{-- Header --}}
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-semibold">IP Bindings</h1>
            <p class="text-sm text-neutral-400">
                Manage MikroTik hotspot IP bindings to bypass authentication for specific devices.
                Bindings automatically sync with your MikroTik routers.
            </p>
        </div>

        <button class="btn-primary flex items-center gap-2">
            🔗 Bind IP
        </button>
    </div>

    {{-- Table Card --}}
    <div class="card">

        {{-- Table Header --}}
        <div class="flex items-center justify-between mb-4">
            <div></div>

            <div class="relative">
                <input
                    type="text"
                    placeholder="Search"
                    class="input w-64 pl-10"
                >
                <span class="absolute left-3 top-1/2 -translate-y-1/2 opacity-60">🔍</span>
            </div>
        </div>

        {{-- Table --}}
        <div class="table-wrapper">
            <table class="w-full text-sm">
                <thead>
                    <tr>
                        <th class="text-left">Name</th>
                        <th class="text-left">MikroTik</th>
                        <th class="text-left">Address</th>
                        <th class="text-left">Package</th>
                        <th class="text-left">Expiry</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="5" class="text-center py-20 opacity-60">
                            ❌ No IP bindings
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection
