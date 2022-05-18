<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
    <div>
        <nav aria-label="breadcrumb" class="d-none d-lg-block">
            <ol class="breadcrumb breadcrumb-style2 mg-b-10">
                @if ($url != 'beranda')
                    <li class="breadcrumb-item"><a href="../beranda">Beranda</a></li>
                @endif
                <li class="breadcrumb-item active" aria-current="page">{{ $url }}</li>

            </ol>
        </nav>

        <h4 class="mg-b-0 tx-montserrat tx-medium text-truncate">
            @yield('title-page')
        </h4>
    </div>
    <div class="d-lg-none mg-t-10">
    </div>
    <div>
    </div>
</div>
