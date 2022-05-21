@extends('layouts.app')

@section('title-page', 'Detail Vaksinasi')

@section('header-btn')
    <div>
        <a href="/jadwal_vaksinasi" class="btn btn-white tx-montserrat tx-semibold"><i data-feather="arrow-left"
                class="wd-10 mg-r-5"></i> Kembali</a>
    </div>
@endsection

@section('content')
    <div class="row row-xs">
        <div class="col-sm-12 col-lg-12 mg-b-10">
            <div class="card">
                <div class="card-header">
                    <div class="row row-xs">
                        <div class="col-10 col-sm-10 col-lg-10 d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="tx-medium tx-montserrat mg-b-0">
                                        {{ date('l, d M Y', strtotime($schedule->vaccine_date)) }}</h5>
                                    <p class="mg-b-5">
                                        {{ date('H:i', strtotime($schedule->vaccine_session_start)) }} -
                                        {{ date('H:i', strtotime($schedule->vaccine_session_end)) }}</p>
                                    @if ($schedule->remaining_quota)
                                        <span class="tx-13"><span class="tx-info"><i
                                                    class="far fa-play-circle mg-r-5"></i>Pendaftaran dibuka</span></span>
                                    @else
                                        <span class="tx-13"><span class="tx-danger"><i
                                                    class="far fa-times-circle mg-r-5"></i>Pendaftaran ditutup</span></span>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="col-2 col-sm-2 col-lg-2 d-flex align-items-center justify-content-end">
                            <div class="dropdown dropdown-custom">
                                <button class="btn btn-white tx-montserrat tx-semibold d-none d-lg-block" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i data-feather="more-vertical" class="wd-10 mg-r-5"></i>Pilihan
                                </button>
                                <button class="btn btn-white btn-icon d-lg-none" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i data-feather="more-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item"
                                        href="{{ route('jadwal_vaksinasi.edit', ['id' => $schedule->id]) }}"><i
                                            data-feather="edit"></i>Edit</a>
                                    <a class="dropdown-item btn-delete" href="#hapusvaksinasi" data-toggle="modal"
                                        data-id="{{ $schedule->id }}" data-animation="effect-scale"><i
                                            data-feather="trash"></i>Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body card-list">
                    <p class="tx-medium tx-15">Tentang Vaksinasi Ini</p>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Vaksinator</span>
                        <p class="mg-b-0">{{ $schedule->vaccinator->name }}</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Jenis Vaksin</span>
                        <p class="mg-b-0">{{ $schedule->vaccine_type->name }}</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Pendaftaran</span>
                        <p class="mg-b-0">{{ date('d M Y', strtotime($schedule->vaccine_regisdate_start)) }} -
                            {{ date('d M Y', strtotime($schedule->vaccine_regisdate_end)) }}</p>
                    </div>
                    <hr class="mg-t-20 mg-b-20">
                    <p class="tx-medium tx-15">Pelaksanaan</p>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Tanggal Vaksinasi</span>
                        <p class="mg-b-0">{{ date('d M Y', strtotime($schedule->vaccine_date)) }}</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Sesi Vaksinasi</span>
                        <p class="mg-b-5">
                            {{ date('H:i', strtotime($schedule->vaccine_session_start)) }} -
                            {{ date('H:i', strtotime($schedule->vaccine_session_end)) }}</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Lokasi</span>
                        <p class="mg-b-0">{{ $schedule->location }}</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Kuota</span>
                        <p class="mg-b-0">{{ $schedule->remaining_quota }}</p>
                    </div>
                </div>
            </div>
        </div>

        @role('admin')
            <div class="col-sm-12 col-lg-12 mg-b-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row row-xs">
                            <div class="col-10 col-sm-10 col-lg-10 d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="tx-medium tx-montserrat mg-b-0">Peserta Vaksinasi</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-lg-2 d-flex align-items-center justify-content-end">
                                <a href="{{ route('jadwal_vaksinasi.member', ['id' => $schedule->id]) }}"
                                    class="btn btn-white tx-montserrat tx-semibold float-right d-none d-lg-block"><i
                                        data-feather="edit" class="wd-10 mg-r-5"></i> Edit Peserta</a>
                                <a href="vaksinasi-peserta.html"
                                    class="btn btn-white btn-icon tx-montserrat tx-medium float-right d-lg-none"><i
                                        data-feather="edit"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Peserta yang sudah dipilih</span>
                        <p class="mg-b-0">{{ count($members) }} orang</p>
                    </div>
                </div>
            </div>
        @endrole

        @role('user')
            <div class="col-sm-12 col-lg-12 mg-b-10 pd-l-5 pd-r-5 ht-70 ht-md-70 ht-lg-70">
            </div>
            @if ($schedule->remaining_quota)
                <div class="col-sm-12 col-lg-12 mg-b-10 d-flex justify-content-center">
                    <div class="card pos-fixed z-index-10 b-40 shadow wd-90p wd-md-80p wd-lg-70p animated slideInUp">
                        <div class="card-body card-alert-success d-flex justify-content-between align-items-center">
                            <span class="tx-montserrat tx-medium d-flex align-items-center"><i
                                    class="fa-lg fas fa-check-circle mg-l-10 mg-r-15 tx-success"></i>Kuota tersedia.</span>
                            <form class="z-index-10" method="POST"
                                action="{{ route('jadwal_vaksinasi.member_register', ['id' => $schedule->id]) }}">
                                @csrf
                                <button type="submit" class="btn btn-its tx-montserrat tx-semibold">Daftar Vaksinasi</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        @endrole

        <div class="modal fade effect-scale" id="hapusvaksinasi" tabindex="-1" role="dialog"
            aria-labelledby="hapusvaksinasi" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content tx-14 bg-white">
                    <div class="modal-body">
                        <h5 class="tx-montserrat tx-medium">Apakah Anda yakin ingin menghapus jadwal vaksinasi ini?</h5>
                        <span>Tindakan ini tidak dapat dibatalkan.</span>
                    </div>
                    <div class="modal-footer bd-t-0">
                        <form method="POST" action="{{ route('jadwal_vaksinasi.destroy', ['id' => $schedule->id]) }}">
                            @csrf
                            @method('delete')
                            <input type=hidden id="id" name=id value="{{ $schedule->id }}">
                            <a href="#" data-toggle="modal" data-animation="effect-scale"
                                class="btn btn-white tx-montserrat tx-semibold" data-dismiss="modal">Batalkan</a>
                            <button type="submit" class="btn btn-its tx-montserrat tx-semibold mg-l-5">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
