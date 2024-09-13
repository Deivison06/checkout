<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureSku extends Model
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
