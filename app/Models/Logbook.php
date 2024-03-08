<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;

   protected $table         = "logbook";
    protected $primaryKey     = 'id';
    public $timestamps = false;
    protected $fillable = [
        
        'nama_pasien',
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
  
}
