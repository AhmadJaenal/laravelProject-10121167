<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_customer',
        'id_product',
        'total_price',
        'address',
        'state',
        'phone',
        'notes',
    ];
}
