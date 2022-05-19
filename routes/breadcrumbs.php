<?php

use App\Models\VaccineSchedule;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('beranda', function (BreadcrumbTrail $trail): void {
    $trail->push('beranda', route('beranda'));
});

Breadcrumbs::for('jadwal-vaksinasi.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('beranda');
    $trail->push('Jadwal vaksinasi', route('jadwal-vaksinasi.index'));
});

Breadcrumbs::for('jadwal-vaksinasi.show', function (BreadcrumbTrail $trail): void {
    $trail->parent('jadwal-vaksinasi.index');
    $trail->push('Detail vaksinasi', route('jadwal-vaksinasi.show', 1));
});

Breadcrumbs::for('jadwal-vaksinasi.edit', function (BreadcrumbTrail $trail, VaccineSchedule $project): void {
    $trail->parent('jadwal-vaksinasi.show');
    $trail->push('Edit vaksinasiasi', route('jadwal-vaksinasi.edit', $vaccineSchedule));
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

Breadcrumbs::for('jenis-vaksin.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('beranda');
    $trail->push('Jenis Vaksin', route('jenis-vaksin.index'));
});
