<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderSku extends Model
{
    use HasFactory;

    protected $table = [
        'order_id',
        'sku_id',
        'product',
        'quantity',
        'unitary_price',
    ];
}
