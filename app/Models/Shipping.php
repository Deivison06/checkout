<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'address',
        'city',
        'state',
        'zipcode',
        'district',
        'number',
        'complement',
        'tracking_code',
        'status',
    ];
}
