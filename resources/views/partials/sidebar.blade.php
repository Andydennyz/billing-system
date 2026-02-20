{{-- DASHBOARD --}}
<div class="sidebar-title">Dashboard</div>

<a href="{{ route('dashboard') }}"
class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
    <span>📊 Dashboard</span>
</a>

<div class="sidebar-submenu">
    <a href="{{ route('dashboard.active-users') }}"
    class="sidebar-subitem {{ request()->routeIs('dashboard.active-users') ? 'active' : '' }}">
        👤 Online Users
    </a>

    <a href="{{ route('dashboard.data-usage') }}"
    class="sidebar-subitem {{ request()->routeIs('dashboard.data-usage') ? 'active' : '' }}">
        📶 Data Usage
    </a>

    <a href="{{ route('dashboard.retention-rate') }}"
    class="sidebar-subitem {{ request()->routeIs('dashboard.retention-rate') ? 'active' : '' }}">
        🔁 Retention Rate
    </a>
</div>


{{-- USERS --}}
<div class="sidebar-title">Users</div>

<a href="{{ route('active-users') }}" class="sidebar-item">
    <span>👤 Active Users</span>
    <span class="sidebar-badge">0</span>
</a>

<a href="{{ route('users') }}"
class="sidebar-item {{ request()->routeIs('users') ? 'active' : '' }}">
    <span>👤 Users</span>
    <span class="sidebar-badge">0</span>
</a>

<div class="sidebar-submenu">
    <a href="{{ route('expiry-dates') }}"
    class="sidebar-subitem {{ request()->routeIs('expiry-dates') ? 'active' : '' }}">
        Expiry Dates
    </a>

    <a href="{{ route('ip-bindings') }}"
    class="sidebar-subitem {{ request()->routeIs('ip-bindings') ? 'active' : '' }}">
        IP Bindings
    </a>
</div>


{{-- FINANCE --}}
<div class="sidebar-title">Finance</div>

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


{{-- COMMUNICATION --}}
<div class="sidebar-title">Communication</div>

<a href="#" class="sidebar-item">
    <span>💬 Messages</span>
</a>

<a href="#" class="sidebar-item">
    <span>✉️ Emails</span>
</a>


{{-- NETWORK --}}
<div class="sidebar-title">Network</div>

<a href="#" class="sidebar-item">
    <span>📡 Mikrotik</span>
</a>