<?php

namespace App\Imports;

use App\Models\LogBook;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class LogBookImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new LogBook([
            'id'                 => $row['No'],
            'tanggal_masuk'      => date('Y-m-d', strtotime($row['Tanggal Masuk'])),
            'nama_pasien'        => $row['Nama Pasien'],
            'umur'               => $row['Umur'], 
            'mr'                 => $row['MR'], 
            'diagnosis_masuk'    => $row['Diagnosis Masuk'], 
            'diagnosis_keluar'   => $row['Diagnosis Keluar'], 
            'tanggal_tindakan'   => date('Y-m-d', strtotime($row['Tanggal Tindakan'])),
            'tindakan'           => $row['Tindakan'], 
            'dpjp'               => $row['DPJP'], 
            'klasifikasi_kasus'  => $row['Klasifikasi Kasus'], 
            'kasus_obstetri'     => $this->mapObstetriValue($row['Kusus Kasus Obstetri']),
            'kasus_ginekologi'   => $this->mapGinekologiValue($row['Kusus Kasus Ginekologi']),
            'level_kompetensi'   => $row['Level Kompetensi'], 
            'asal_rujukan'       => $row['Asal Rujukan'], 
            'keterangan'        => $row['Keterangan'], 
        ]);
    
    
    }
    private function mapObstetriValue($kasus_obstetri)
    {
        switch ($kasus_obstetri) {
            case 'kasus_obstetri':
                return 'diagnosis_obstetri_enum_value';
            case 'tindakan_obstetri':
                return 'tindakan_obstetri_enum_value';
            default:
                return 'default_enum_value';
        }
    }

    private function mapGinekologiValue($kasus_ginekologi)
    {
        switch ($kasus_ginekologi) {
            case 'diagnosis_ginekologi':
                return 'diagnosis_ginekologi_enum_value';
            case 'tindakan_ginekologi':
                return 'tindakan_ginekologi_enum_value';
            default:
                return 'default_enum_value';
        }
    }


}
