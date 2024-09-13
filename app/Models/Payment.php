<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
       'external_id',
       'order_id',
       'method',
       'status',
       'installments',
       'approved_at',
       'qr_code_64',
       'qr_code',
       'ticket_url',
    ];
}
