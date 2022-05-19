@extends('layouts.app')

@section('title-page', 'Jenis Vaksin')

@section('content')
    <div class="row row-xs">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body pd-0 table-responsive">
                    <table id="example1" class="table table-borderless mg-0">
                        <thead>
                            <tr class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase">
                                <th class="wd-80p th-its" style="border-bottom: none !important"><span
                                        class="mg-r-15">Nama</span></th>
                                <th class="wd-20p th-its" style="border-bottom: none !important"><span
                                        class="mg-r-15">Aksi</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="td-its align-middle border-bottom">Coronavac</td>
                                <td class="td-its align-middle border-bottom"><a href="#" class="btn btn-white btn-icon"
                                        role="button" data-toggle="modal" data-target="#hapusjenisvaksin"
                                        data-animation="effect-scale"><i data-feather="trash"
                                            class="wd-10"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@stop
