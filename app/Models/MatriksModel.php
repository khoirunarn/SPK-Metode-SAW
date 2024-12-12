<?php

namespace App\Models;

use CodeIgniter\Model;

class MatriksModel extends Model
{
    protected $table = 'matriks_alternatif'; // Nama tabel
    protected $primaryKey = 'id_matriks';    // Primary key
    protected $allowedFields = ['kode_alternatif', 'kode_kriteria', 'value']; // Kolom yang bisa diisi

    public function getAllMatriks()
    {
        // Query untuk join tabel alternatif dan kriteria
        return $this->select('matriks_alternatif.*, data_alternatif.nama_alternatif, data_kriteria.nama_kriteria')
                    ->join('data_alternatif', 'matriks_alternatif.kode_alternatif = data_alternatif.kode_alternatif')
                    ->join('data_kriteria', 'matriks_alternatif.kode_kriteria = data_kriteria.kode_kriteria')
                    ->findAll();
    }
}