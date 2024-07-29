<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
    <li class="nav-item ">
        <a href=" {{ url('admin/dashboard') }}" class="nav-link {{request()->is('admin/dashboard') ? 'active' : ''}}">
            <i class=" nav-icon fas fa-home"></i>
            <p>
                Dashboard
            </p>
        </a>
    </li>
    <li class="nav-header">FITUR</li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
                Master-Data
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('admin/pengguna') }}" class="nav-link {{request()->is('admin/pengguna') ? 'active' : ''}}">
                    <p>Pengguna</p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('admin/module') }}" class="nav-link {{request()->is('admin/module') ? 'active' : ''}}">
                    <p>Module</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item ">
        <a href=" {{ url('admin/history') }}" class="nav-link {{request()->is('admin/history') ? 'active' : ''}}">
            <i class=" nav-icon	fas fa-hourglass-half"></i>
            <p>
                History
            </p>
        </a>
    </li>
    <li class="nav-item ">
        <a href=" {{ url('admin/galery') }}" class="nav-link {{request()->is('admin/galery') ? 'active' : ''}}">
            <i class=" nav-icon	far fa-images"></i>
            <p>
                Gallery
            </p>
        </a>
    </li>
    <li class="nav-item ">
        <a href=" {{ url('admin/news') }}" class="nav-link {{request()->is('admin/news') ? 'active' : ''}}">
            <i class=" nav-icon	far fa-newspaper"></i>
            <p>
                News
            </p>
        </a>
    </li>
</ul>