<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    // protected $primaryKey = 'id';
    protected $guarded = ['id'];


    // protected $fillable = ['name', 'password', 'is_admin', 'email', 'verify_key', 'active'];
}
