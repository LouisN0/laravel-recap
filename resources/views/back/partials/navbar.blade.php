<div id="sidebar" class="active">
    <div class="d-flex">
    <div class="sidebar-wrapper active nav-back rounded-end h-75 mb-auto">
        <div class="sidebar-header">
            <a class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Chain App Dev">
            </a>
        </div>
        <div class="sidebar-menu mt-5">
            <ul class="menu mt-5">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item {{ request()->routeIs("dashboard") ? "active" : "" }}">
                    <a href="{{ route("dashboard") }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->routeIs("user.index") ? "active" : "" }}">
                    <a href="{{ route("user.index") }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li class="sidebar-title">Page</li>
                
                <li class="sidebar-title">
                    <a class="" href="{{ route("/") }}">Exit</a>
                </li>

                <li class="sidebar-title">
                    <form class="" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div :href="route('logout')"
                            style="cursor: pointer"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                    </form>
                </li>
            </ul>
        </div>
    </div>
    </div>
</div>
