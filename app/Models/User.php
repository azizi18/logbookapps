<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



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
    public function logbook()
    {
        return $this->hasMany(Logbook::class);
    }
  
    public function dosen()
    {
        return $this->belongsTo(DosenMahasiswaAssignment::class);
    }

    public function mahasiswa()
    {
        return $this->belongsTo(DosenMahasiswaAssignment::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }
}
