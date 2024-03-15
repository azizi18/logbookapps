<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DosenMahasiswaAssignment extends Model
{
    use HasFactory;
    protected $table = 'dosen_mahasiswa_assignment';
    protected $fillable = [
        'dosen_id', 
        'mahasiswa_id',
    ];

    public function dosen()
    {
        return $this->belongsTo(User::class, 'dosen_id');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(User::class, 'mahasiswa_id');

    }
    public function logbook()
    {
        return $this->belongsTo(Logbook::class, 'id');

    }
    public function dosenMahasiswaAssignment()
    {
        return $this->belongsTo(DosenMahasiswaAssignment::class, 'mahasiswa_id');
    }

   
}
