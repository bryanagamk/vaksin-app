@extends('layouts.app')

@section('title-page', 'Jadwal Vaksinasi')


@section('content')
    <div class="col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-body card-list">
                <div class="card-list-item">
                    <a href="vaksinasi-detail.html">
                        <div class="d-flex justify-content-between align-items-center sc-link">
                            <div class="media">
                                <div
                                    class="wd-40 ht-40 bg-its-icon tx-color-its mg-r-15 mg-md-r-15 d-flex align-items-center justify-content-center rounded-its">
                                    <i data-feather="calendar"></i>
                                </div>
                                <div class="media-body align-self-center">
                                    <p class="tx-montserrat tx-semibold mg-b-0 tx-color-02">Sabtu, 03 Apr 2021</p>
                                    <p class="tx-color-03 tx-13">07.00 - 12.00</p>
                                    <span class="tx-13"><span class="tx-info"><i
                                                class="far fa-play-circle mg-r-5"></i>Pendaftaran dibuka</span></span>
                                </div>
                            </div>
                            <div class="btn btn-icon btn-its-icon btn-hover">
                                <i data-feather="chevron-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-list-item">
                    <a href="#">
                        <div class="d-flex justify-content-between align-items-center sc-link">
                            <div class="media">
                                <div
                                    class="wd-40 ht-40 bg-its-icon tx-color-its mg-r-15 mg-md-r-15 d-flex align-items-center justify-content-center rounded-its">
                                    <i data-feather="calendar"></i>
                                </div>
                                <div class="media-body align-self-center">
                                    <p class="tx-montserrat tx-semibold mg-b-0 tx-color-02">Sabtu, 24 Apr 2021</p>
                                    <p class="tx-color-03 tx-13">08.00 - 15.00</p>
                                    <span class="tx-13"><span class="tx-gray-700"><i
                                                class="far fa-circle mg-r-5"></i>Pendaftaran belum dibuka</span></span>
                                </div>
                            </div>
                            <div class="btn btn-icon btn-its-icon btn-hover">
                                <i data-feather="chevron-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-list-item">
                    <a href="#">
                        <div class="d-flex justify-content-between align-items-center sc-link">
                            <div class="media">
                                <div
                                    class="wd-40 ht-40 bg-its-icon tx-color-its mg-r-15 mg-md-r-15 d-flex align-items-center justify-content-center rounded-its">
                                    <i data-feather="calendar"></i>
                                </div>
                                <div class="media-body align-self-center">
                                    <p class="tx-montserrat tx-semibold mg-b-0 tx-color-02">Sabtu, 06 Mar 2021</p>
                                    <p class="tx-color-03 tx-13">12.00 - 15.00</p>
                                    <span class="tx-13"><span class="tx-danger"><i
                                                class="far fa-times-circle mg-r-5"></i>Pendaftaran ditutup</span></span>
                                </div>
                            </div>
                            <div class="btn btn-icon btn-its-icon btn-hover">
                                <i data-feather="chevron-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
