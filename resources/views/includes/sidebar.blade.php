<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('image/logo.png') }}" alt="Logo" srcset="" class="img-fluid"></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Posyandu Pepaya Cipayung</li>

                <li class="sidebar-item  {{ (request()->is('admin')) ? 'active' : '' }}">
                    <a href="/admin" class='sidebar-link'>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ (request()->is('admin/balita*'))
                        ? 'active' : '' }}">
                    <a href="{{ route('balita-index') }}" class='sidebar-link '>
                        <span>Data Balita</span>
                    </a>
                </li>
                <li class="sidebar-item {{ (request()->is('admin/ibu-hamil*'))
                        ? 'active' : '' }}">
                    <a href="{{ route('ibu-hamil-index') }}" class='sidebar-link'>
                        <span>Data Ibu Hamil</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('admin/penimbangan*'))
                        ? 'active' : '' }}">
                    <a href="{{ route('penimbangan.index') }}" class='sidebar-link'>

                        <span>Data Penimbangan</span>
                    </a>
                </li>
                <li class="sidebar-item {{ (request()->is('admin/imunisasi*'))
                        ? 'active' : '' }}">
                    <a href="{{ route('imunisasi.index') }}" class='sidebar-link'>
                        <span>Data Imunisasi</span>
                    </a>
                </li>
                <li class="sidebar-item {{ (request()->is('admin/vitamin*'))
                        ? 'active' : '' }}">
                    <a href="{{ route('vitamin.index') }}" class='sidebar-link'>
                        <span>Data Vitamin</span>
                    </a>
                </li>
                <li class="sidebar-item {{ (request()->is('admin/kematian*'))
                        ? 'active' : '' }}">
                    <a href="{{ route('kematian.index') }}" class='sidebar-link'>
                        <span>Data Kematian</span>
                    </a>
                </li>
                <li class="sidebar-item {{ (request()->is('admin/laporan*'))
                        ? 'active' : '' }}">
                    <a href="{{ route('laporan') }}" class='sidebar-link'>
                        <span>Laporan</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class='sidebar-link btn btn-link btn-block'>
                            <span>Keluar</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
