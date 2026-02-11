

<div class="sidebar-title">Users</div>

<div class="sidebar-group">
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
        ="sidebar-subitem {{ request()->routeIs('ip-bindings') ? 'active' : '' }}">
            IP Bindings
        </a>
    </div>
</div>
