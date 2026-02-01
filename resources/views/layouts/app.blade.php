<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 text-white flex-shrink-0">
        <div class="p-6 text-xl font-bold border-b border-gray-700">
            Astrid Billing
        </div>

        <nav class="p-4 space-y-2">
            <a href="{{ url('/') }}"
               class="block px-4 py-2 rounded hover:bg-gray-800">
                Dashboard
            </a>

            <a href="{{ url('/payments') }}"
               class="block px-4 py-2 rounded hover:bg-gray-800">
                Payments
            </a>

            <a href="{{ url('/invoices') }}"
               class="block px-4 py-2 rounded hover:bg-gray-800">
                Invoices
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>

</div>

</body>
</html>
