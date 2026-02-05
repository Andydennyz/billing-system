<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="bg-neutral-950 text-white">

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            Astrid Billing
        </div>

        <nav class="sidebar-nav">

            <!-- Dashboard -->
            <a href="#" class="sidebar-item active">
                <span>📊 Dashboard</span>
            </a>

            <!-- USERS -->
            <div class="sidebar-section">Users</div>

            <a href="#" class="sidebar-item">
                <span>👤 Active Users</span>
                <span class="sidebar-badge">0</span>
            </a>

            <a href="#" class="sidebar-item">
                <span>🎫 Tickets</span>
                <span class="sidebar-badge">0</span>
            </a>

            <a href="#" class="sidebar-item">
                <span>📌 Leads</span>
                <span class="sidebar-badge">0</span>
            </a>

            <!-- FINANCE -->
            <div class="sidebar-section">Finance</div>

            <a href="#" class="sidebar-item">
                <span>📦 Packages</span>
                <span class="sidebar-badge">0</span>
            </a>

            <a href="#" class="sidebar-item">
                <span>💳 Payments</span>
                <span class="sidebar-badge">0</span>
            </a>

            <a href="#" class="sidebar-item">
                <span>🎟️ Vouchers</span>
                <span class="sidebar-badge">0</span>
            </a>

            <a href="#" class="sidebar-item">
                <span>💸 Expenses</span>
                <span class="sidebar-badge">0</span>
            </a>

            <!-- COMMUNICATION -->
            <div class="sidebar-section">Communication</div>

            <a href="#" class="sidebar-item">
                <span>💬 Messages</span>
            </a>

            <a href="#" class="sidebar-item">
                <span>✉️ Emails</span>
            </a>

            <!-- NETWORK -->
            <div class="sidebar-section">Network</div>

            <a href="#" class="sidebar-item">
                <span>📡 Mikrotik</span>
            </a>

        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 ml-64 p-6">
        @yield('content')
    </main>

</div>

@stack('scripts')

</body>
</html>
