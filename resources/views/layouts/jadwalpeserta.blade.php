@extends('layouts.app')

@section('title-page', 'Edit Peserta Vaksinasi')

@section('header-btn')
    <div>
        <a href="{{ route('jadwal_vaksinasi.show', ['id' => 1]) }}" class="btn btn-white tx-montserrat tx-semibold"><i
                data-feather="arrow-left" class="wd-10 mg-r-5"></i> Kembali</a>
    </div>
@endsection

@section('content')
    <div class="row row-xs">
        <div class="col-sm-12 col-lg-12 mg-b-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="tx-montserrat tx-medium">Calon Peserta</h5>

                    @if ($quota)
                        <p class="tx-color-03 tx-13">Pilih siapa saja yang dapat mengikuti vaksinasi ini.</p>
                        <button type="button" class="btn btn-its tx-montserrat tx-semibold" data-toggle="modal"
                            data-target="#tambahpanitia" data-animation="effect-scale"><i data-feather="plus"
                                class="wd-10 mg-r-5 tx-color-its2"></i> Tambah Daftar Peserta</button>
                    @else
                        <p class="tx-color-03 tx-13">Mohon maaf, kuota peserta sudah penuh.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-12 mg-b-10">
            <div class="row row-sm">
                <div class="col-sm-12 col-lg-12 mg-b-10 mg-sm-b-10 mg-lg-b-10">
                    <div class="card">
                        <div class="card-body pd-b-5">
                            <h5 class="tx-montserrat tx-medium">Daftar Peserta Vaksinasi</h5>
                        </div>
                        <div class="card-body pd-0 table-responsive">
                            <table id="example1" class="table table-borderless mg-0">
                                <thead>
                                    <tr class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase">
                                        <th class="wd-30p th-its" style="border-bottom: none !important"><span
                                                class="mg-r-15">NIP/NPP</span></th>
                                        <th class="wd-50p th-its" style="border-bottom: none !important"><span
                                                class="mg-r-15">Nama</span></th>
                                        <th class="wd-20p th-its" style="border-bottom: none !important"><span
                                                class="mg-r-15">Aksi</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $member)
                                        <tr>
                                            <td class="td-its tx-medium align-middle border-bottom">
                                                {{ $member->user->nip }}
                                            </td>
                                            <td class="td-its tx-medium align-middle border-bottom">
                                                {{ $member->user->name }}</td>
                                            <td class="td-its align-middle border-bottom"><a href="#"
                                                    class="btn btn-white btn-icon btn-delete" role="button"
                                                    data-toggle="modal" data-target="#hapusdpt"
                                                    data-id="{{ $member->id }}" data-animation="effect-scale"><i
                                                        data-feather="trash" class="wd-10"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('modal-create')
    <div class="modal fade effect-scale" id="tambahpanitia" tabindex="-1" role="dialog" aria-labelledby="modalmyfile"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="tx-montserrat tx-medium" id="tambahpanitiaLabel">Tambah Daftar Peserta Vaksinasi</h5>
                </div>
                <form method="POST" action="{{ route('jadwal_vaksinasi.member_create', ['id' => $id]) }}">
                    @csrf
                    <div class="modal-body pd-0 table-responsive">
                        <table id="example2" class="table table-borderless mg-0">
                            <thead>
                                <tr class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase">
                                    <th class="wd-30p th-its" style="border-bottom: none !important"><span
                                            class="mg-r-15">NIP/NPP</span>
                                    </th>
                                    <th class="wd-70p th-its" style="border-bottom: none !important"><span
                                            class="mg-r-15">Nama</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="td-its tx-medium align-middle border-bottom">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="user{{ $user->id }}" name="users[]" value="{{ $user->id }}">
                                                <label class="custom-control-label"
                                                    for="user{{ $user->id }}">{{ $user->nip }}</label>
                                            </div>
                                        </td>
                                        <td class="td-its tx-medium align-middle border-bottom">{{ $user->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white tx-montserrat tx-semibold"
                            data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-its tx-montserrat tx-semibold mg-l-5">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<script src=//code.jquery.com/jquery-3.5.1.slim.min.js integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
crossorigin=anonymous></script>
<script>
    $('.btn-delete').click(function() {
        var dataid = $(this).attr('data-id');
        $('#id').val(dataid);
    });
</script>

@section('modal-delete')
    <div class="modal fade effect-scale" id="hapusdpt" tabindex="-1" role="dialog" aria-labelledby="hapusdpt"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content tx-14 bg-white">
                <div class="modal-body">
                    <h5 class="tx-montserrat tx-medium">Hapus Peserta Vaksinasi?</h5>
                    <span>Tindakan ini tidak dapat dibatalkan.</span>
                </div>
                <div class="modal-footer bd-t-0">
                    <form method="POST" action="{{ route('jadwal_vaksinasi.member_destroy', ['id' => $id]) }}">
                        @csrf
                        @method('delete')
                        <input type=hidden id="id" name=id>
                        <a href="#" data-toggle="modal" data-animation="effect-scale"
                            class="btn btn-white tx-montserrat tx-semibold" data-dismiss="modal">Batalkan</a>
                        <button type="submit" class="btn btn-its tx-montserrat tx-semibold mg-l-5">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@stop
