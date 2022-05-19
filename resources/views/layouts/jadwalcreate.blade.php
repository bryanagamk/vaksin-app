@extends('layouts.app')

@section('title-page', 'Tambah Vaksinasi')

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
                <div class="card-body">
                    <form action="#">
                        <p class="tx-medium tx-15">Tentang Vaksinasi Ini</p>
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Vaksinator</label>
                            <select class="form-control select2" required>
                                <option label="Pilih"></option>
                                <option value="1" selected>RSU Haji</option>
                                <option value="2">Puskesmas Keputih</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Jenis
                                Vaksin</label>
                            <select class="form-control select2" required>
                                <option label="Pilih"></option>
                                <option value="1">AstraZeneca</option>
                                <option value="2" selected>CoronaVac</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label
                                        class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Pendaftaran
                                        dimulai</label>
                                    <input type="date" id="tgl_mulai" name="tgl_mulai" class="form-control"
                                        value="2021-03-20" required>
                                </div>
                                <div class="col-6">
                                    <label
                                        class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Pendaftaran
                                        selesai</label>
                                    <input type="date" id="tgl_mulai" name="tgl_selesai" class="form-control"
                                        value="2021-03-31" required>
                                </div>
                            </div>
                        </div>
                        <hr class="mg-t-20 mg-b-20">
                        <p class="tx-medium tx-15">Pelaksanaan</p>
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Tanggal
                                Vaksinasi</label>
                            <input type="date" id="pelaksanaan" name="tgl_pelaksanaan" class="form-control"
                                value="2021-04-05" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Sesi
                                        Vaksinasi Dimulai</label>
                                    <input type="time" id="sesi_mulai" name="sesi_mulai" class="form-control"
                                        value="06:00:00" required>
                                </div>
                                <div class="col-6">
                                    <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Sesi
                                        Vaksinasi Selesai</label>
                                    <input type="time" id="sesi_selesai" name="sesi_selesai" class="form-control"
                                        value="20:00:00" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Lokasi</label>
                            <input type="text" id="pelaksanaan" name="tgl_pelaksanaan" class="form-control"
                                placeholder="Tempat vaksinasi" maxlength="100" value="Surabaya" required>
                        </div>
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Kuota</label>
                            <input type="number" id="pelaksanaan" name="tgl_pelaksanaan" class="form-control"
                                placeholder="Jumlah peserta" value="500" required>
                        </div>

                        <button class="btn btn-its tx-montserrat tx-semibold float-right" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@stop
