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
        'superadmin' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'admin' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
            'vaksinator' => 'c,r,d',
            'jenis_vaksin' => 'c,r,d',
            'profile' => 'r,u',
            'jadwal_vaksinasi' => 'c, r, u, d',
            'peserta_vaksinasi' => 'c, r, u, d',
            'laporan' => 'r, u',
        ],
        'user' => [
            'profile' => 'r,u',
            'riwayat' => 'r',
            'kipi' => 'c, r, d',
            'jadwal_vaksinasi' => 'r',
            'daftar_vaksinasi' => 'c, r',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
