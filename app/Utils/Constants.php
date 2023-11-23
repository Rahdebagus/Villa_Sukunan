<?php

namespace App\Utils;

class Constants
{
    public const user_role = [
        'user' => 'user',
        'seller' => 'seller',
        'admin' => 'admin',
    ];

    public const user_status = [
        'active' => 'active',
        'banned' => 'banned',
        'waiting' => 'waiting',
    ];

    public const booking_status = [
        'payment' => 'payment',
        'waiting' => 'waiting',
        'refund' => 'refund',
        'active' => 'active',
        'done' => 'done',
    ];
}
