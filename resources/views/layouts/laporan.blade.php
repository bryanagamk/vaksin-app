@extends('layouts.app')

@section('title-page', 'Laporan')

@section('content')
    <div class="row row-xs">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body pd-0 table-responsive">
                    <table id="example1" class="table table-borderless mg-0">
                        <thead>
                            <tr class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase">
                                <th class="wd-25p th-its" style="border-bottom: none !important"><span>Pegawai</span></th>
                                <th class="wd-20p th-its" style="border-bottom: none !important"><span>Kehadiran</span></th>
                                <th class="wd-5p th-its" style="border-bottom: none !important"><span>Vaksinasi Ke</span>
                                </th>
                                <th class="wd-10p th-its" style="border-bottom: none !important"><span>Vaksinasi Pada</span>
                                </th>
                                <th class="wd-10p th-its" style="border-bottom: none !important"><span>Vaksinasi
                                        Selanjutnya</span></th>
                                <th class="wd-20p th-its" style="border-bottom: none !important"><span>Vaksinator</span>
                                </th>
                                <th class="wd-10p th-its" style="border-bottom: none !important"><span>Penyelenggara</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="td-its align-middle border-bottom">
                                    <a href="pegawai-detail.html">
                                        <p class="mg-b-0 tx-medium tx-color-its3">Gunawan</p>
                                        <p class="mg-b-0 tx-13 tx-color-03">331309200300009</p>
                                    </a>
                                </td>
                                <td class="td-its align-middle border-bottom">
                                    <span class="tx-color-01"><i
                                            class="fas fa-check-circle mg-r-5 tx-success"></i>Hadir</span>
                                </td>
                                <td class="td-its align-middle border-bottom tx-color-02">1</td>
                                <td class="td-its align-middle border-bottom tx-color-02">20/03/1998</td>
                                <td class="td-its align-middle border-bottom tx-color-02">30/03/1998</td>
                                <td class="td-its align-middle border-bottom tx-color-02">RSU Haji</td>
                                <td class="td-its align-middle border-bottom tx-color-02">Internal</td>
                            </tr>
                            <tr>
                                <td class="td-its align-middle border-bottom">
                                    <a href="#">
                                        <p class="mg-b-0 tx-medium tx-color-its3">Gunawan</p>
                                        <p class="mg-b-0 tx-13 tx-color-03">331309200300009</p>
                                    </a>
                                </td>
                                <td class="td-its align-middle border-bottom">
                                    <span class="tx-color-01"><i class="fas fa-times-circle mg-r-5 tx-danger"></i>Tidak
                                        hadir</span>
                                </td>
                                <td class="td-its align-middle border-bottom tx-color-02">1</td>
                                <td class="td-its align-middle border-bottom tx-color-02">20/03/1998</td>
                                <td class="td-its align-middle border-bottom tx-color-02">30/03/1998</td>
                                <td class="td-its align-middle border-bottom tx-color-02">RSU Haji</td>
                                <td class="td-its align-middle border-bottom tx-color-02">Internal</td>
                            </tr>
                            <tr>
                                <td class="td-its align-middle border-bottom">
                                    <a href="#">
                                        <p class="mg-b-0 tx-medium tx-color-its3">Zulal</p>
                                        <p class="mg-b-0 tx-13 tx-color-03">3313092003000010</p>
                                    </a>
                                </td>
                                <td class="td-its align-middle border-bottom d-flex align-items-center">
                                    <form>
                                        <button class="btn btn-white btn-icon" type="submit" data-toggle="tooltip"
                                            data-placement="bottom" title="Hadir"><i
                                                class="fas fa-check-circle tx-success"></i></button>
                                    </form>
                                    <form class="mg-l-5">
                                        <button class="btn btn-white btn-icon" type="submit" data-toggle="tooltip"
                                            data-placement="bottom" title="Tidak hadir"><i
                                                class="fas fa-times-circle tx-danger"></i></button>
                                    </form>
                                </td>
                                <td class="td-its align-middle border-bottom tx-color-02">1</td>
                                <td class="td-its align-middle border-bottom tx-color-02">20/03/1998</td>
                                <td class="td-its align-middle border-bottom tx-color-02">30/03/1998</td>
                                <td class="td-its align-middle border-bottom tx-color-02">RSU Haji</td>
                                <td class="td-its align-middle border-bottom tx-color-02">Internal</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@stop
