<?php

return [
    'general' => [
        'boolean' => [
            1 => 'yes',
            0 => 'no',
        ],
        'check' => [
            1 => 'active',
            0 => 'inactive',
        ],
        'friend_card_modalities' => [
            'monthly' => 'monthly',
            'yearly' => 'yearly',
        ],
    ],

    'adoption' => [
        'status' => [
            'open' => 'open',
            'pending' => 'pending',
            'closed' => 'closed',
            'archived' => 'archived',
        ],
    ],

    'animal' => [
        'gender' => [
            'male' => 'male',
            'female' => 'female',
        ],
    ],

    'appointment' => [
        'status' => [
            'approving' => 'approving',
            'approved_option_1' => 'approved_option_1',
            'approved_option_2' => 'approved_option_2',
        ],
    ],

    'process' => [
        'specie' => [
            'dog' => 'dog',
            'cat' => 'cat',
        ],

        'status' => [
            'approving' => 'approving',
            'waiting_godfather' => 'waiting_godfather',
            'waiting_capture' => 'waiting_capture',
            'open' => 'open',
            'closed' => 'closed',
            'archived' => 'archived',
        ],
    ],

    'treatment' => [
        'status' => [
            'approving' => 'approving',
            'approved' => 'approved',
        ],
    ],

    'territory' => [
        'levels' => [
            1 => 'district',
            2 => 'county',
            3 => 'parish',
        ],
    ],

    'vet' => [
        'status' => [
            'active' => 'active',
            'inactive' => 'inactive',
        ],
    ],

    'user' => [
        'status' => [
            1 => 'active',
            0 => 'inactive',
        ],
        'roles' => [
            1 => 'admin',
            2 => 'volunteer',
            3 => 'store',
        ],
        'permissions' => [
            1 => 'processes',
            2 => 'appointments',
            3 => 'treatments',
            4 => 'adoptions',
            5 => 'accountancy',
            6 => 'website',
            7 => 'store',
            8 => 'friend card',
            9 => 'vets',
            10 => 'protocols',
            11 => 'council',
        ],
    ],

    'forms' => [
        'themes' => [
            'adoption' => 'adoption',
            'sterilization' => 'sterilization',
        ],
    ],
];
