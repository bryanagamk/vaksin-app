@extends('layouts.app')

@section('title-page', 'Edit Vaksinasi')

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
                    <form action="{{ route('jadwal_vaksinasi.update', ['id' => $schedule->id]) }}" method="POST">
                        @csrf
                        <p class="tx-medium tx-15">Tentang Vaksinasi Ini</p>
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Vaksinator</label>
                            <select class="form-control select2" name="vaccinator_id" required>
                                <option label="Pilih"></option>
                                @foreach ($vaccinators as $vaccinator)
                                    <option value="{{ $vaccinator->id }}"
                                        {{ $vaccinator->id == $schedule->vaccinator_id ? 'selected' : '' }}>
                                        {{ $vaccinator->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Jenis
                                Vaksin</label>
                            <select class="form-control select2" name="vaccine_type_id" required>
                                <option label="Pilih"></option>
                                @foreach ($vaccineTypes as $vaccineType)
                                    <option value="{{ $vaccineType->id }}"
                                        {{ $vaccineType->id == $schedule->vaccine_type_id ? 'selected' : '' }}>
                                        {{ $vaccineType->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label
                                        class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Pendaftaran
                                        dimulai</label>
                                    <input type="date" id="vaccine_regisdate_start" name="vaccine_regisdate_start"
                                        class="form-control" value="{{ $schedule->vaccine_regisdate_start }}" required>
                                </div>
                                <div class="col-6">
                                    <label
                                        class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Pendaftaran
                                        selesai</label>
                                    <input type="date" id="vaccine_regisdate_end" name="vaccine_regisdate_end"
                                        class="form-control" value="{{ $schedule->vaccine_regisdate_end }}" required>
                                </div>
                            </div>
                        </div>
                        <hr class="mg-t-20 mg-b-20">
                        <p class="tx-medium tx-15">Pelaksanaan</p>
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Tanggal
                                Vaksinasi</label>
                            <input type="date" id="pelaksanaan" name="vaccine_date" class="form-control"
                                value="{{ $schedule->vaccine_date }}" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Sesi
                                        Vaksinasi Dimulai</label>
                                    <input type="time" id="vaccine_session_start" name="vaccine_session_start"
                                        class="form-control" value="{{ $schedule->vaccine_session_start }}" required>
                                </div>
                                <div class="col-6">
                                    <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Sesi
                                        Vaksinasi Selesai</label>
                                    <input type="time" id="vaccine_session_end" name="vaccine_session_end"
                                        class="form-control" value="{{ $schedule->vaccine_session_end }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Lokasi</label>
                            <input type="text" id="location" name="location" class="form-control"
                                placeholder="Tempat vaksinasi" maxlength="100" value="{{ $schedule->location }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Kuota</label>
                            <input type="number" id="quota" name="quota" class="form-control" placeholder="Jumlah peserta"
                                value="{{ $schedule->quota }}" required>
                        </div>

                        <button class="btn btn-its tx-montserrat tx-semibold float-right" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@stop
