@extends('layouts.app')

@section('title-page', 'Riwayat')

@section('content')
    <div class="row row-xs">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body card-list">
                    @foreach ($histories as $history)
                        <div class="card-list-item">
                            <a href="{{ route('riwayat.show', ['id' => $history->id]) }}">
                                <div class="d-flex justify-content-between align-items-center sc-link">
                                    <div class="media">
                                        <div
                                            class="wd-40 ht-40 bg-its-icon tx-color-its mg-r-15 mg-md-r-15 d-flex align-items-center justify-content-center rounded-its">
                                            @if ($history->attendance)
                                                <span
                                                    class="tx-medium tx-color-its tx-24">{{ $history->number_vaccine }}</span>
                                            @else
                                                <span
                                                    class="tx-medium tx-color-its tx-24">{{ $history->number_vaccine + 1 }}</span>
                                            @endif

                                        </div>
                                        <div class="media-body align-self-center">
                                            <p class="tx-montserrat tx-semibold mg-b-0 tx-color-02">
                                                @if ($history->attendance)
                                                    {{ date('l, d M Y', strtotime($history->vaccine_at)) }}
                                                @else
                                                    {{ date('l, d M Y', strtotime($history->schedule->vaccine_date)) }}
                                                @endif

                                            </p>
                                            <p class="tx-color-03 tx-13">
                                                {{ date('H:i', strtotime($history->schedule->vaccine_session_start)) }} -
                                                {{ date('H:i', strtotime($history->schedule->vaccine_session_end)) }}
                                            </p>
                                            @if ($history->attendance)
                                                <span class="tx-13"><span class="tx-success"><i
                                                            class="far fa-check-circle mg-r-5"></i>Selesai</span></span>
                                            @else
                                                <span class="tx-13"><span class="tx-info"><i
                                                            class="far fa-arrow-alt-circle-right mg-r-5"></i>Menunggu
                                                        Vaksinasi</span></span>
                                            @endif

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
@stop
