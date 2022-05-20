@extends('layouts.app')

@section('title-page', 'Vaksinator')

@section('header-btn')
    <div>
        <a href="#tambahvaksinator" data-toggle="modal" data-target="#tambahvaksinator" data-animation="effect-scale"
            class="btn btn-its tx-montserrat tx-semibold">
            <i data-feather="plus" class="wd-10 mg-r-5 tx-color-its2"></i> Tambah</a>
    </div>
@endsection

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
                            @foreach ($vaccinators as $vaccinator)
                                <tr>
                                    <td class="td-its align-middle border-bottom">{{ $vaccinator->name }}</td>
                                    <td class="td-its align-middle border-bottom"><a href="#"
                                            class="btn btn-white btn-icon btn-delete" role="button" data-toggle="modal"
                                            data-target="#hapusvaksinator" data-id="{{ $vaccinator->id }}"
                                            data-animation="effect-scale"><i data-feather="trash"
                                                class="wd-10"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@section('modal-create')
    <div class="modal fade effect-scale" id="tambahvaksinator" tabindex="-1" role="dialog" aria-labelledby="modalmyfile"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="tx-montserrat tx-medium" id="tambahvaksinatorLabel">Tambah Vaksinator</h5>
                </div>
                <form action="{{ route('vaksinator.store') }}" method="POST">
                    @csrf
                    <div class="modal-body pd-t-0">
                        <div class="form-group">
                            <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Nama</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
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
    <div class="modal fade effect-scale" id="hapusvaksinator" tabindex="-1" role="dialog" aria-labelledby="hapusvaksinator"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content tx-14 bg-white">
                <div class="modal-body">
                    <h5 class="tx-montserrat tx-medium">Apakah Anda yakin ingin menghapus vaksinator ini?</h5>
                    <span>Tindakan ini tidak dapat dibatalkan.</span>
                </div>
                <div class="modal-footer bd-t-0">
                    <form method="POST" action="{{ route('vaksinator.destroy') }}">
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
