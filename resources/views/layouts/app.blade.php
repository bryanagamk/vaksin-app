<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DashForge">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/dashforge">
    <meta property="og:title" content="DashForge">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.png">

    <title>{{ config('app.name', 'Vaksin-App') }}</title>

    <!-- vendor css -->
    <link href="../../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../lib/jqvmap/jqvmap.min.css" rel="stylesheet">
    <link href="../../lib/prismjs/themes/prism-vs.css" rel="stylesheet">
    <link href="../../lib/animate.css/animate.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="../../css/dashforge.css">
    <link rel="stylesheet" href="../../css/dashforge.customs.css">
    <link rel="stylesheet" href="../../css/skin.light.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    </style>

    <link href="../../lib/select2/css/select2.min.css" rel="stylesheet">
</head>

{{-- <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body> --}}

<body>
    @include('layouts.sidebar')
    <div class="content ht-100v pd-0" style="position: relative">
        @include('layouts.header')

        {{-- <div class="modal fade effect-scale" id="chgRoleUser" tabindex="-1" role="dialog"
            aria-labelledby="chgRoleUserLabel" aria-modal="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-white">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h5 class="tx-montserrat tx-medium" id="chgRoleUserLabel">Hak Akses</h5>
                        <p class="tx-color-02">Hak akses Anda saat ini: <b>User </b>.</p>
                        <select class="form-control" id="menu">
                            <option selected="selected">Select One</option>
                            <option value="../beranda/index.html">Pegawai</option>
                            <option value="../beranda/index-admin.html">Admin</option>
                        </select>
                        <div class="mg-t-20 d-flex justify-content-end">
                            <button type="button" class="btn btn-white tx-montserrat tx-semibold"
                                data-dismiss="modal">Batal</button>
                            <input class="btn btn-its tx-montserrat tx-semibold mg-l-5 mg-lg-l-10" type="button"
                                id="goBtn" value="Ganti">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="content-body ht-100p pd-t-80">
            <div class="container pd-x-0" id="content">

                {{ Breadcrumbs::render() }}

                @yield('content')
            </div><!-- container -->
        </div>
    </div>

    <div class="modal fade effect-scale" id="tambahvaksinator" tabindex="-1" role="dialog" aria-labelledby="modalmyfile"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="tx-montserrat tx-medium" id="tambahvaksinatorLabel">Tambah Vaksinator</h5>
                </div>
                <form>
                    <div class="modal-body pd-t-0">
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white tx-montserrat tx-semibold"
                            data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-its tx-montserrat tx-semibold mg-l-5">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/feather-icons/feather.min.js"></script>
    <script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../lib/js-cookie/js.cookie.js"></script>
    <script src="../../js/dashforge.js"></script>
    <script src="../../js/dashforge.aside.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <!-- Script base -->
    <script>
        //canvas menu
        $(function() {
            'use strict'

            $('.off-canvas-menu').on('click', function(e) {
                e.preventDefault();
                var target = $(this).attr('href');
                $(target).addClass('show');
            });

            $('.off-canvas .close').on('click', function(e) {
                e.preventDefault();
                $(this).closest('.off-canvas').removeClass('show');
            })

            $(document).on('click touchstart', function(e) {
                e.stopPropagation();
                if (!$(e.target).closest('.off-canvas-menu').length) {
                    var offCanvas = $(e.target).closest('.off-canvas').length;
                    if (!offCanvas) {
                        $('.off-canvas.show').removeClass('show');
                    }
                }
            });
        });

        //tooltip
        $('[data-toggle="tooltip"]').tooltip();

        //allow focus menu
        $(document).on('click', '.allow-focus', function(e) {
            e.stopPropagation();
        });

        //file name input
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        //script sementara untuk beralih role
        var goBtn = document.getElementById("goBtn");
        var menu = document.getElementById("menu");

        goBtn.onclick = function() {
            window.location = menu.value;
        }
    </script>

    <script src="../../lib/select2/js/select2.min.js"></script>
    <script src="../../lib/datatables.net/js/jquery.dataTables.min.js"></script>

    <script>
        $(function() {
            'use strict'

            $('#example1').DataTable({
                language: {
                    searchPlaceholder: 'Cari',
                    sSearch: '',
                    lengthMenu: '_MENU_ data/halaman',
                    emptyTable: 'Tidak ada data yang tersedia pada tabel ini',
                    zeroRecords: 'Tidak ditemukan data yang sesuai',
                    info: 'Menampilkan _START_ sampai _END_ dari _TOTAL_ entri',
                    infoEmpty: 'Menampilkan 0 sampai 0 dari 0 entri',
                    infoFiltered: '(disaring dari _MAX_ entri keseluruhan)',
                    paginate: {
                        first: "<i class='fas fa-angle-double-left'></i>",
                        last: "<i class='fas fa-angle-double-right'></i>",
                        previous: "<i class='fas fa-angle-left'></i>",
                        next: "<i class='fas fa-angle-right'></i>"
                    },
                }
            });

            // Select2
            $('.dataTables_length select').select2({
                minimumResultsForSearch: Infinity
            });

        });
    </script>

</body>

</html>
