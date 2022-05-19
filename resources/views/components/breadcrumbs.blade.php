<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
    <div>
        <nav aria-label="breadcrumb" class="d-none d-lg-block">
            @unless($breadcrumbs->isEmpty())
                <ol class="breadcrumb breadcrumb-style2 mg-b-10">
                    @foreach ($breadcrumbs as $breadcrumb)
                        @if (!is_null($breadcrumb->url) && !$loop->last)
                            <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                            </li>
                        @else
                            <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
                        @endif
                    @endforeach
                </ol>
            @endunless
        </nav>

        <h4 class="mg-b-0 tx-montserrat tx-medium text-truncate">
            @yield('title-page')
        </h4>
    </div>
    <div class="d-lg-none mg-t-10">
    </div>
    <div>
        <a href="vaksinasi-add.html" class="btn btn-its tx-montserrat tx-semibold">
            <i data-feather="plus" class="wd-10 mg-r-5 tx-color-its2"></i> Tambah</a>
    </div>
</div>
