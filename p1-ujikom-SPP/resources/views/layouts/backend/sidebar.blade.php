<ul class="navbar-nav bg-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home.index')}}">
        <div class="sidebar-brand-icon">
            <!-- <i class="fas fa-money-check-alt"></i> -->
            <img src="{{ asset ('/assets/images/logo.png')}}" width="60px" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">Bayar <sup>SPP</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    @role('admin')
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::segment(1) == 'home' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home.index') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" style="margin-top: -5px;"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
            </span>
            <span class="ml-1">Home</span></a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-desktop"></i>
            <span class="ml-1">Dashboard</span></a>
    </li>
    @endrole

    @role('petugas')
    <li class="nav-item {{ Request::segment(1) == 'home' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home.index') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" style="margin-top: -5px;"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
            </span>
            <span class="ml-1">Home</span></a>
    </li>
    @elserole('siswa')
    <li class="nav-item {{ Request::segment(1) == 'home' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home.index') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" style="margin-top: -5px;"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
            </span>
            <span class="ml-1">Home</span></a>
    </li>
    @endrole

    <!-- Divider -->
    @role('admin')
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Manajemen Data
    </div>
    <li class="nav-item {{ Request::segment(2) == 'siswa' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('siswa.index') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users" style="margin-top: -5px;"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </span>
            <span class="ml-1">Siswa</span>
        </a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'pembayaran-spp' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pembayaran-spp.index') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign" style="margin-top: -5px;"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                </svg>
            </span>
            <span class="ml-1">Pembayaran</span>
        </a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'kelas' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kelas.index') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                </svg>
            </span>
            <span class="ml-1">Kelas</span>
        </a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'admin-list' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin-list.index') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-top:-5px;" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                </svg>
            </span>
            <span class="ml-1">Admin</span>
        </a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'user' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('user.index') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users" style="margin-top: -5px;"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </span>
            <span class="ml-1">User</span>
        </a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'petugas' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('petugas.index') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-top:-5px;" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                </svg>
            </span>
            <span class="ml-1">Petugas</span>
        </a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'spp' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('spp.index') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign" style="margin-top: -5px;"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                </svg>
            </span>
            <span class="ml-1">SPP</span>
        </a>
    </li>
    @endrole

    <hr class="sidebar-divider">
    @role('admin|petugas')
    <!-- Heading -->
    <div class="sidebar-heading">
        Pembayaran
    </div>
    <li class="nav-item {{ Request::segment(2) == 'bayar' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pembayaran.index') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-top:-5px;" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
            </span>
            <span class="ml-1">Pembayaran</span>
        </a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'status-pembayaran' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pembayaran.status-pembayaran') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-top: -5px;" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line>
                </svg>
            </span>
            <span class="ml-1">Status Pembayaran</span>
        </a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'history-pembayaran' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pembayaran.history-pembayaran') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-top: -5px;" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>
                </svg>
            </span>
            <span class="ml-1">Riwayat Pembayaran</span>
        </a>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'laporan' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pembayaran.laporan') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                </svg>
            </span>
            <span class="ml-1">Laporan Pembayaran</span>
        </a>
    </li>
    @endrole
    @role('siswa')
    <!-- Heading -->
    <div class="sidebar-heading">
        Pembayaran
    </div>
    <li class="nav-item {{ Request::segment(2) == 'pembayaran-spp' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('siswa.pembayaran-spp') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-top:-5px;" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
            </span>
            <span class="ml-1">Pembayaran</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('siswa/history-pembayaran') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('siswa.history-pembayaran') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-top: -5px;" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>
                </svg>
            </span>
            <span class="ml-1">Riwayat Pembayaran</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('siswa/laporan-pembayaran') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('siswa.laporan-pembayaran') }}">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                </svg>
            </span>
            <span class="ml-1">Laporan Pembayaran</span>
        </a>
    </li>
    @endrole
</ul>
