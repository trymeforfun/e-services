<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Menu</div>
                    <a class="nav-link {{ Request::path() == 'dashboard' ? 'bg-secondary' : '' }}"
                        href="{{ url('/dashboard') }}">
                        Order Jasa
                    </a>
                    <a class="nav-link {{ Request::path() == 'penjemputan' ? 'bg-secondary' : '' }}"
                        href="{{ url('/penjemputan') }}">
                        Penjemputan
                    </a>
                    <a class="nav-link {{ Request::path() == 'pengerjaan' ? 'bg-secondary' : '' }}"
                        href="{{ url('/pengerjaan') }}">
                        Pengerjaan
                    </a>
                    <a class="nav-link {{ Request::path() == 'pengembalian' ? 'bg-secondary' : '' }}"
                        href="{{ url('/pengembalian') }}">
                        Pengembalian
                    </a>
                    <a class="nav-link {{ Request::path() == 'pembayaran' ? 'bg-secondary' : '' }}"
                        href="{{ url('/pembayaran') }}">
                        Pembayaran
                    </a>
                    <a class="nav-link {{ Request::path() == 'laporan' ? 'bg-secondary' : '' }}"
                        href="{{ url('laporan') }}">
                        Laporan
                    </a>
                </div>
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{ url('/users') }}">
                        Users
                    </a>
                    <a class="nav-link" href="{{ url('/roles') }}">
                        Roles
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                {{-- <div class="small">Logged in as:</div>
                Start Bootstrap --}}
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
