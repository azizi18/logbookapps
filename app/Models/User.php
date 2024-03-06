<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;


class User extends Authenticatable
{


     protected $table         = "users";
     protected $primaryKey     = 'id';
     public $timestamps = false;

    protected $fillable = [
        'nama',
        'username',
        'password',
        'level',
    ];

  
   
}
