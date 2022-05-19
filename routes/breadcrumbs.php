<?php

use App\Models\VaccineSchedule;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('beranda', function (BreadcrumbTrail $trail): void {
    $trail->push('beranda', route('beranda'));
});

Breadcrumbs::for('jadwal_vaksinasi.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('beranda');
    $trail->push('Jadwal vaksinasi', route('jadwal_vaksinasi.index'));
});

Breadcrumbs::for('jadwal_vaksinasi.show', function (BreadcrumbTrail $trail): void {
    $trail->parent('jadwal_vaksinasi.index');
    $trail->push('Detail vaksinasi', route('jadwal_vaksinasi.show', 1));
});

Breadcrumbs::for('jadwal_vaksinasi.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('jadwal_vaksinasi.index');
    $trail->push('Tambah vaksinasi', route('jadwal_vaksinasi.create'));
});

Breadcrumbs::for('jadwal_vaksinasi.edit', function (BreadcrumbTrail $trail): void {
    $trail->parent('jadwal_vaksinasi.show');
    $trail->push('Edit vaksinasiasi', route('jadwal_vaksinasi.edit', 1));
});

Breadcrumbs::for('laporan.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('beranda');
    $trail->push('Laporan', route('laporan.index'));
});

Breadcrumbs::for('pegawai.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('beranda');
    $trail->push('Pegawai', route('pegawai.index'));
});

Breadcrumbs::for('pegawai.show', function (BreadcrumbTrail $trail): void {
    $trail->parent('pegawai.index');
    $trail->push('Detail Pegawai', route('pegawai.show', 1));
});

Breadcrumbs::for('vaksinator.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('beranda');
    $trail->push('Vaksinator', route('vaksinator.index'));
});

Breadcrumbs::for('jenis_vaksin.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('beranda');
    $trail->push('Jenis Vaksin', route('jenis_vaksin.index'));
});

Breadcrumbs::for('riwayat.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('beranda');
    $trail->push('Riwayat', route('riwayat.index'));
});

Breadcrumbs::for('riwayat.show', function (BreadcrumbTrail $trail): void {
    $trail->parent('riwayat.index');
    $trail->push('Detail Riwayat', route('riwayat.show', 1));
});


// Breadcrumbs::for('riwayat.edit', function (BreadcrumbTrail $trail, VaccineSchedule $project): void {
//     $trail->parent('riwayat.show');
//     $trail->push('Edit vaksinasiasi', route('riwayat.edit', $vaccineSchedule));
// });
