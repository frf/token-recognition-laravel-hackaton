<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class CustomerOrder extends Model
{
    use Uuids;

    protected $fillable = [
        'name_product',
        'value_transaction',
        'type_payment',
        'payment_transaction',
        'token_transaction',
    ];
}
