<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Menu</div>

                    @role('admin|customer')
                    <a class="nav-link {{ Request::path() == 'dashboard' ? 'bg-secondary' : '' }}"
                        href="{{ url('/dashboard') }}">
                        Order Jasa
                    </a>
                    @endrole
                    @role('admin|customer|shoe_keeper')
                    <a class="nav-link {{ Request::path() == 'penjemputan' ? 'bg-secondary' : '' }}"
                        href="{{ url('/penjemputan') }}">
                        Penjemputan
                    </a>
                    @endrole
                    @role('shoe_keeper|production_staff')
                    <a class="nav-link {{ Request::path() == 'pengerjaan' ? 'bg-secondary' : '' }}"
                        href="{{ url('/pengerjaan') }}">
                        Pengerjaan
                    </a>
                    @endrole
                    @role('admin|shoe_keeper|customer')
                    <a class="nav-link {{ Request::path() == 'pengembalian' ? 'bg-secondary' : '' }}"
                        href="{{ url('/pengembalian') }}">
                        Pengembalian
                    </a>
                    @endrole
                    @role('admin|customer')
                    <a class="nav-link {{ Request::path() == 'pembayaran' ? 'bg-secondary' : '' }}"
                        href="{{ url('/pembayaran') }}">
                        Pembayaran
                    </a>
                    @endrole
                    @role('admin|production_staff|team_leader')
                    <a class="nav-link {{ Request::path() == 'laporan' ? 'bg-secondary' : '' }}"
                        href="{{ url('laporan') }}">
                        Laporan
                    </a>
                    @endrole
                </div>
                @role('admin')
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link {{ Request::path() == 'user' ? 'bg-secondary' : '' }}" href="{{ url('/users') }}">
                        Users
                    </a>
                    <a class="nav-link {{ Request::path() == 'roles' ? 'bg-secondary' : '' }}" href="{{ url('/roles') }}">
                        Roles
                    </a>
                    <a class="nav-link {{ Request::path() == 'permission' ? 'bg-secondary' : '' }}" href="{{ url('/permission') }}">
                        Permission
                    </a>
                </div>
                @endrole
            </div>
            <div class="sb-sidenav-footer">
                {{-- <div class="small">Logged in as:</div>
                Start Bootstrap --}}
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
