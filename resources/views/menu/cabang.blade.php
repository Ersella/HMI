<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
    <li class="nav-item ">
        <a href=" {{ url('cabang/dashboard') }}" class="nav-link {{request()->is('cabang/dashboard') ? 'active' : ''}}">
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
                <a href="{{ url('cabang/pengurus') }}" class="nav-link {{request()->is('cabang/pengurus') ? 'active' : ''}}">
                    <p>Pengurus</p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('cabang/alumni') }}" class="nav-link {{request()->is('cabang/alumni') ? 'active' : ''}}">
                    <p>Alumni</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item ">
        <a href=" {{ url('cabang/transaksi') }}" class="nav-link {{request()->is('cabang/transaksi') ? 'active' : ''}}">
            <i class=" nav-icon fas fa-mail-bulk"></i>
            <p>
                Surat
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('cabang/surat-masuk') }}" class="nav-link {{request()->is('cabang/surat-masuk') ? 'active' : ''}}">
                    <p>Surat Masuk</p>
                </a>
                <a href="{{ url('cabang/surat-keluar') }}" class="nav-link {{request()->is('cabang/surat-keluar') ? 'active' : ''}}">
                    <p>Surat Keluar</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item ">
        <a href=" {{ url('cabang/surat') }}" class="nav-link {{request()->is('cabang/surat') ? 'active' : ''}}">
            <i class=" nav-icon fas fa-mail-bulk"></i>
            <p>
                Template Surat
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('cabang/surat-cabang') }}" class="nav-link {{request()->is('cabang/surat-cabang') ? 'active' : ''}}">
                    <p>Surat Cabang</p>
                </a>
                <a href="{{ url('cabang/surat-kohati') }}" class="nav-link {{request()->is('cabang/surat-kohati') ? 'active' : ''}}">
                    <p>Surat Kohati Cabang</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item ">
        <a href=" {{ url('cabang/training') }}" class="nav-link {{request()->is('cabang/training') ? 'active' : ''}}">
            <i class=" nav-icon	fas fa-edit"></i>
            <p>
                Training
            </p>
        </a>
    </li>
    <li class="nav-item ">
        <a href=" {{ url('cabang/keuangan') }}" class="nav-link {{request()->is('cabang/keuangan') ? 'active' : ''}}">
            <i class=" nav-icon	fas fa-hand-holding-usd"></i>
            <p>
                Keuangan
            </p>
        </a>
    </li>
</ul>