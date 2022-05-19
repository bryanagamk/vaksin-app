<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'HomeController' => 'c,r,u,d',
            'JadwalVaksinController' => 'c,r,u,d',
            'VaksinatorController' => 'c,r,d',
            'JenisVaksinController' => 'c,r,d',
            'PegawaiController' => 'c,r,u,d',
            '#peserta_vaksinasi' => 'c,r,u,d',
            'LaporanController' => 'r,u',
        ],
        'user' => [
            'HomeController' => 'c,r,u,d',
            'JadwalVaksinController' => 'r',
            '#daftar_vaksinasi' => 'c,r',
            'RiwayatController' => 'r',
            '#kipi' => 'c,r,d',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'index',
        's' => 'show',
        'u' => 'update',
        'd' => 'delete'
    ]
];
