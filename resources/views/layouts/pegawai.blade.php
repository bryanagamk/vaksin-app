@extends('layouts.app')

@section('title-page', 'Pegawai')

@section('content')
    <div class="row row-xs">
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
                            @foreach ($users as $user)
                                <tr>
                                    <td class="td-its align-middle border-bottom">
                                        <a href="{{ route('pegawai.show', ['id' => $user->id]) }}">
                                            <p class="mg-b-0 tx-medium tx-color-its3">{{ $user->name }}</p>
                                            <p class="mg-b-0 tx-13 tx-color-03">{{ $user->nik }}</p>
                                        </a>
                                    </td>
                                    <td class="td-its align-middle border-bottom">{{ $user->gender }}</td>
                                    <td class="td-its align-middle border-bottom">
                                        {{ date('d/m/Y', strtotime($user->birth_date)) }}
                                    </td>
                                    <td class="td-its align-middle border-bottom">{{ $user->nip }}</td>
                                    <td class="td-its align-middle border-bottom">{{ $user->blood_type }}</td>
                                    <td class="td-its align-middle border-bottom">{{ $user->handphone }}</td>
                                    <td class="td-its align-middle border-bottom">{{ $user->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
