@extends('layouts.app')

@section('title-page', 'Detail Pegawai')

@section('header-btn')
    <div>
        <a href="/pegawai" class="btn btn-white tx-montserrat tx-semibold"><i data-feather="arrow-left"
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
                                    <h5 class="tx-medium tx-montserrat mg-b-0">Gunawan</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body card-list">
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Nama</span>
                        <p class="mg-b-0">Gunawan</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">NIK</span>
                        <p class="mg-b-0">331309200300009</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Jenis Kelamin</span>
                        <p class="mg-b-0">Laki-laki</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Tanggal Lahir</span>
                        <p class="mg-b-0">20/03/1998</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">NIP/NPP</span>
                        <p class="mg-b-0">1234567890123456</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Golongan Darah</span>
                        <p class="mg-b-0">A</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Nomor HP</span>
                        <p class="mg-b-0">081212341234</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Status</span>
                        <p class="mg-b-0">Aktif</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
