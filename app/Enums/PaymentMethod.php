<?php

namespace App\Enums;

enum PaymentMethod: string
{
    case CreditCard = 'credit_card';
    case BankTransfer = 'bank_transfer';
    case Qris = 'qris';
    case Gopay = 'gopay';
    case Shopeepay = 'shopeepay';
    case Cstore = 'cstore';
}
