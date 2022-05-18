@extends('layouts.app')

@section('title-page', 'Jenis Vaksin')

@section('content')
    <div class="col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-body pd-0 table-responsive">
                <table id="example1" class="table table-borderless mg-0">
                    <thead>
                        <tr class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase">
                            <th class="wd-25p th-its" style="border-bottom: none !important">
                                <span>Pegawai</span>
                            </th>
                            <th class="wd-10p th-its" style="border-bottom: none !important">
                                <span>Jenis Kelamin</span>
                            </th>
                            <th class="wd-10p th-its" style="border-bottom: none !important"><span>Tgl
                                    Lahir</span></th>
                            <th class="wd-20p th-its" style="border-bottom: none !important">
                                <span>NIP/NPP</span>
                            </th>
                            <th class="wd-10p th-its" style="border-bottom: none !important">
                                <span>Golongan Darah</span>
                            </th>
                            <th class="wd-15p th-its" style="border-bottom: none !important">
                                <span>Nomor HP</span>
                            </th>
                            <th class="wd-10p th-its" style="border-bottom: none !important">
                                <span>Status</span>
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
                            <td class="td-its align-middle border-bottom">Laki-laki</td>
                            <td class="td-its align-middle border-bottom">20/03/1998</td>
                            <td class="td-its align-middle border-bottom">1234567890123456</td>
                            <td class="td-its align-middle border-bottom">A</td>
                            <td class="td-its align-middle border-bottom">081212341234</td>
                            <td class="td-its align-middle border-bottom">Aktif</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
