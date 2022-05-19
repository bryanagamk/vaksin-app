<div class="content-header align-items-center justify-content-start pos-fixed wd-100p z-index-10">
    <div>
        <a href="../../index.html" class="tx-montserrat tx-semibold tx-18 d-lg-none">myITS Vaksin</a>
    </div>
    <nav class="nav r-25 pos-fixed z-index-10">
        <div class="dropdown dropdown-profile allow-focus">
            <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static" aria-expanded="false">
                <div class="avatar avatar-sm"><img
                        src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                        class="rounded-circle" alt=""></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right allow-focus">
                <h5 class="tx-medium tx-montserrat mg-b-5">{{ Auth::user()->name }}</h5>
                <p class="mg-b-25 tx-13 tx-color-03">{{ Auth::user()->nik }} / {{ Auth::user()->nip }}</p>
                {{-- <a href="" class="dropdown-item" data-toggle="modal" data-target="#chgRoleUser"
                    data-animation="effect-scale">
                    <i data-feather="users"></i>Ganti hak akses
                </a> --}}
                <a href="" class="dropdown-item  ht-30"><i data-feather="home"></i>myITS SSO</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item ht-30">
                        <i data-feather="log-out"></i>Keluar
                    </button>
                </form>

            </div>
        </div>
    </nav>
</div>
