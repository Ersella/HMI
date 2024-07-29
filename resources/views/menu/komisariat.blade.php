<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
    <li class="nav-item ">
        <a href=" {{ url('komisariat/dashboard') }}" class="nav-link {{request()->is('komisariat/dashboard') ? 'active' : ''}}">
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
                Data
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('komisariat/anggota') }}" class="nav-link {{request()->is('komisariat/anggota') ? 'active' : ''}}">
                    <p>Data Anggota</p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('komisariat/daftar-anggota') }}" class="nav-link {{request()->is('komisariat/daftar-anggota') ? 'active' : ''}}">
                    <p>Daftar Anggota</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item ">
        <a href=" {{ url('komisariat/transaksi') }}" class="nav-link {{request()->is('komisariat/transaksi') ? 'active' : ''}}">
            <i class=" nav-icon fas fa-mail-bulk"></i>
            <p>
                Surat
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('komisariat/surat-masuk') }}" class="nav-link {{request()->is('komisariat/surat-masuk') ? 'active' : ''}}">
                    <p>Surat Masuk</p>
                </a>
                <a href="{{ url('komisariat/surat-keluar') }}" class="nav-link {{request()->is('komisariat/surat-keluar') ? 'active' : ''}}">
                    <p>Surat Keluar</p>
                </a>
            </li>
        </ul>
    </li>
</ul>