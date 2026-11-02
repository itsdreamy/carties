<?php

namespace App\Enums;

enum PaymentGateway: string
{
    case Midtrans = 'midtrans';
    case Manual = 'manual';
}
