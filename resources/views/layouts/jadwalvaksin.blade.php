@extends('layouts.app')

@section('title-page', 'Jadwal Vaksinasi')

@section('header-btn')
    <div>
        <a href="{{ route('jadwal_vaksinasi.create') }}" class="btn btn-its tx-montserrat tx-semibold">
            <i data-feather="plus" class="wd-10 mg-r-5 tx-color-its2"></i> Tambah</a>
    </div>
@endsection

@section('content')
    <div class="row row-xs">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body card-list">
                    @foreach ($vaccineSchedules as $schedule)
                        <div class="card-list-item">
                            <a href="{{ route('jadwal_vaksinasi.show', ['id' => $schedule->id]) }}">
                                <div class="d-flex justify-content-between align-items-center sc-link">
                                    <div class="media">
                                        <div
                                            class="wd-40 ht-40 bg-its-icon tx-color-its mg-r-15 mg-md-r-15 d-flex align-items-center justify-content-center rounded-its">
                                            <i data-feather="calendar"></i>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <p class="tx-montserrat tx-semibold mg-b-0 tx-color-02">
                                                {{ $schedule->vaccine_date }}</p>
                                            <p class="tx-color-03 tx-13">{{ $schedule->vaccine_session_start }} -
                                                {{ $schedule->vaccine_session_end }}</p>
                                            {{-- TODO: quota & session & vaccine date --}}
                                            <span class="tx-13"><span class="tx-info"><i
                                                        class="far fa-play-circle mg-r-5"></i>Pendaftaran
                                                    dibuka</span></span>
                                        </div>
                                    </div>
                                    <div class="btn btn-icon btn-its-icon btn-hover">
                                        <i data-feather="chevron-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>

@stop
