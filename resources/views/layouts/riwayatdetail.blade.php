@extends('layouts.app')

@section('title-page', 'Detail Riwayat')

@section('header-btn')
    <div>
        <a href="/riwayat" class="btn btn-white tx-montserrat tx-semibold"><i data-feather="arrow-left"
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
                                    <h5 class="tx-medium tx-montserrat mg-b-0">Sabtu, 06 Mar 2021</h5>
                                    <p class="mg-b-5">12.00 - 15.00</p>
                                    <span class="tx-13"><span class="tx-success"><i
                                                class="far fa-check-circle mg-r-5"></i>Selesai</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body card-list">
                    <p class="tx-medium tx-15">Tentang Vaksinasi Ini</p>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Vaksinator</span>
                        <p class="mg-b-0">RSU Haji</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Jenis Vaksin</span>
                        <p class="mg-b-0">Coronavac</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Pendaftaran</span>
                        <p class="mg-b-0">20 Feb 2021 - 31 Feb 2021</p>
                    </div>
                    <hr class="mg-t-20 mg-b-20">
                    <p class="tx-medium tx-15">Pelaksanaan</p>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Tanggal Vaksinasi</span>
                        <p class="mg-b-0">06 Mar 2021</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Sesi Vaksinasi</span>
                        <p class="mg-b-0">12.00 - 15.00</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Lokasi</span>
                        <p class="mg-b-0">Surabaya</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Kuota</span>
                        <p class="mg-b-0">500 orang</p>
                    </div>
                    <div class="card-list-text">
                        <span class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Vaksinasi Ke</span>
                        <p class="mg-b-0">1</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-12 mg-b-10">
            <div class="card">
                <div class="card-header">
                    <div class="row row-xs">
                        <div class="col-10 col-sm-10 col-lg-10 d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="tx-medium tx-montserrat mg-b-0">KIPI</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 col-sm-2 col-lg-2 d-flex align-items-center justify-content-end">
                            <a href="#tambahkipi" data-toggle="modal" data-animation="effect-scale"
                                class="btn btn-white tx-montserrat tx-semibold float-right d-none d-lg-block"><i
                                    data-feather="plus" class="wd-10 mg-r-5"></i> Tambah</a>
                            <a href="#tambahkipi" data-toggle="modal" data-animation="effect-scale"
                                class="btn btn-white btn-icon tx-montserrat tx-medium float-right d-lg-none"><i
                                    data-feather="plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body pd-0">
                    <div class="table-responsive">
                        <table class="table table-borderless table-hover">
                            <thead>
                                <tr class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase">
                                    <th class="wd-15p th-its">Tanggal Kejadian</th>
                                    <th class="wd-40p th-its">Gejala</th>
                                    <th class="wd-25p th-its">Tindakan</th>
                                    <th class="wd-15p th-its">Hubungi Dokter</th>
                                    <th class="wd-5p th-its tx-color-03"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="td-its tx-medium align-middle border-bottom">20 Mar 2021</td>
                                    <td class="td-its align-middle border-bottom">Pilek</td>
                                    <td class="td-its align-middle border-bottom">Obat pilek</td>
                                    <td class="td-its align-middle border-bottom">Sudah</td>
                                    <td class="td-its align-middle border-bottom tx-color-03">
                                        <a href="#hapuskipi" data-toggle="modal" data-animation="effect-scale"
                                            class="btn btn-white btn-icon" role="button" data-toggle="modal"
                                            data-target="#hapuskipi" data-animation="effect-scale"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash wd-10">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('modal-create')
    <div class="modal fade effect-scale" id="tambahkipi" tabindex="-1" role="dialog" aria-labelledby="modalmyfile"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="tx-montserrat tx-medium" id="tambahkipiLabel">Tambah KIPI</h5>
                </div>
                <form>
                    <div class="modal-body mn-ht-450 pd-t-0">
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold" for="tgl">Tanggal
                                kejadian</label>
                            <input type="date" id="tgl" name="tgl_kejadian" class="form-control " placeholder="" value=""
                                required>
                        </div>
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold"
                                for="tgl">Gejala</label>
                            <textarea class="form-control" rows="2" placeholder="" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold"
                                for="tgl">Tindakan</label>
                            <textarea class="form-control" rows="2" placeholder="" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold" for="tgl">Sudah
                                menghubungi dokter?</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="vaksin_sudah" value="1" name="pernah_vaksin"
                                            class="custom-control-input" required>
                                        <label class="custom-control-label" for="vaksin_sudah">Sudah</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="vaksin_belum" value="0" name="pernah_vaksin"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="vaksin_belum">Belum</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white tx-montserrat tx-semibold"
                            data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-its tx-montserrat tx-semibold">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('modal-delete')
    <div class="modal fade effect-scale" id="hapuskipi" tabindex="-1" role="dialog" aria-labelledby="hapuskipi"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content tx-14 bg-white">
                <div class="modal-body">
                    <h5 class="tx-montserrat tx-medium">Hapus KIPI?</h5>
                    <span>Tindakan ini tidak dapat dibatalkan.</span>
                </div>
                <div class="modal-footer bd-t-0">
                    <a href="#" data-toggle="modal" data-animation="effect-scale"
                        class="btn btn-white tx-montserrat tx-semibold" data-dismiss="modal">Batal</a>
                    <button type="submit" class="btn btn-its tx-montserrat tx-semibold">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@stop
