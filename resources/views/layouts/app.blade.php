<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="bg-neutral-950 text-white flex">

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            Astrid Billing
        </div>

        <nav class="sidebar-nav">
            @include('partials.sidebar')
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 ml-64 p-6 flex flex-col min-h-screen">
        @yield('content')

        <!-- Footer -->
        @include('partials.footer')
    </main>

</div>

@stack('scripts')

</body>
</html>