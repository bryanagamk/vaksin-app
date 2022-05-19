<aside class="aside aside-fixed">
    <div class="aside-header">
        <a href="/beranda" class="tx-montserrat tx-semibold tx-18 aside-logo">myITS Vaksin</a>
        <a href="" class="aside-menu-link">
            <i data-feather="menu"></i>
            <i data-feather="x"></i>
        </a>
    </div>
    <div class="aside-body">
        <ul class="nav nav-aside">
            <li class="nav-item"><a href="/beranda" class="nav-link"><i data-feather="home"></i>
                    <span>Beranda</span></a></li>
            @role('admin')
                <li class="nav-label mg-t-15">Kelola</li>
                <li class="nav-item"><a href="/jadwal_vaksinasi" class="nav-link"><i data-feather="calendar"></i>
                        <span>Jadwal Vaksinasi</span></a></li>
                <li class="nav-item"><a href="/laporan" class="nav-link"><i data-feather="clipboard"></i>
                        <span>Laporan</span></a></li>
                <li class="nav-label mg-t-15">Data</li>
                <li class="nav-item"><a href="/pegawai" class="nav-link"><i data-feather="user"></i>
                        <span>Pegawai</span></a></li>
                <li class="nav-item"><a href="/vaksinator" class="nav-link"><i data-feather="users"></i>
                        <span>Vaksinator</span></a></li>
                <li class="nav-item"><a href="/jenis_vaksin" class="nav-link"><i data-feather="copy"></i>
                        <span>Jenis Vaksin</span></a></li>
            @endrole
            @role('user')
                <li class="nav-label mg-t-15">Pegawai</li>
                <li class="nav-item"><a href="/riwayat" class="nav-link"><i data-feather="clock"></i>
                        <span>Riwayat</span></a></li>
                <li class="nav-item">
                    <a href="/jadwal_vaksinasi" class="nav-link"><i data-feather="calendar"></i>
                        <span>Jadwal Vaksinasi</span></a>
                </li>
            @endrole
        </ul>
    </div>
</aside>
