<div class="sidebar-header">
    <a class="header-brand" href="index.html">
        <div class="logo-img">
            <h3>Admin <span class="text-success">Panel</span></h3>

        </div>

    </a>
    <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
    <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
</div>

<div class="sidebar-content">
    <div class="nav-container">
        <nav id="main-menu-navigation" class="navigation-main">
            <div class="nav-lavel">Navigation</div>
            <div class="nav-item">
                <a href="{{route('admin.dashboard')}}"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
            </div>

            <div class="nav-item has-sub {{request()->is('admin/bike/list') ? 'active' : ''}}">
                <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Bikes</span></a>
                <div class="submenu-content">
                    <a href="{{route('admin.bike.list')}}" class="menu-item {{request()->is('admin/bike/list') ? 'active' : ''}}">Bike List</a>
                    <a href="{{route('admin.bike.create')}}" class="menu-item {{request()->is('admin/bike/create') ? 'active' : ''}}">Bike Create</a>

                </div>

            </div>



        </nav>
    </div>
</div>
