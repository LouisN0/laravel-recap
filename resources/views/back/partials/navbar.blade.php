<div id="sidebar" class="active">
    <div class="d-flex">
    <div class="sidebar-wrapper active nav-back rounded-end h-100 mb-auto">
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
                <li class="sidebar-item {{ request()->routeIs("banner.index") ? "active" : "" }}">
                    <a href="{{ route("banner.index") }}" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Banner</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub {{ request()->routeIs("service.index")||request()->routeIs("service.create") ? "active" : "" }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Service</span>
                    </a>
                    <ul class="submenu p-0">
                        
                            <li class="submenu-item ">
                                <a href="{{ route("service.create") }}">Create Service</a>
                            </li>     
                       
                        <li class="submenu-item ">
                            <a href="{{ route("service.index") }}">All Service</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub {{ request()->routeIs("testimonial.index")||request()->routeIs("testimonial.create") ? "active" : "" }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Testimonial</span>
                    </a>
                    <ul class="submenu p-0">
                        {{-- @can('create', Testimonial::class) --}}
                            <li class="submenu-item ">
                                <a href="{{ route("testimonial.create") }}">Create Testimonial</a>
                            </li>
                        {{-- @endcan --}}
                        <li class="submenu-item ">
                            <a href="{{ route("testimonial.index") }}">All Testimonial</a>
                        </li>
                    </ul>
                </li>
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
