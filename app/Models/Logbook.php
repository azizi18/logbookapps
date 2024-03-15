<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Str;


class Logbook extends Model
{
    use HasFactory;
    protected $guarded =[];

   protected $table         = "logbook";
    protected $primaryKey     = 'id';
    public $timestamps = false;
    protected $keyType = 'string'; // Tipe kolom ID
    public $incrementing = false; // Non-incrementing IDs
    protected $fillable = [
        'mahasis_id',
        'user_id',
        'nama_pasien',
        'umur',
        'umur',
        'diagnosis_masuk',
        'diagnosis_keluar',
        'tindakan',
        'dpjp',
        'klasifikasi_kasus',
        'kasus_obstetri',
        'kasus_ginekologi',
        'level_kompetensi',
        'asal_rujukan',
        'keterangan',
        'status',
        'tanggal_masuk',
        'tanggal_tindakan',
 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

  
    public function assignment()
    {
        return $this->belongsTo(DosenMahasiswaAssignment::class, 'id');
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }
  
}
