<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // protected $fillable = [
    //     'id',
    //     'id_customer',
    //     'id_product',
    //     'amount',
    //     'address',
    //     'email',
    //     'detail_address',
    //     'state',
    //     'postal_code',
    //     'is_paid',
    //     'phone',
    //     'notes',
    // ];
}
