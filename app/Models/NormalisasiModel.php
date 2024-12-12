<?php

namespace App\Models;

use CodeIgniter\Model;

class NormalisasiModel extends Model
{
    protected $table = 'v_normalisasi'; // Menggunakan view v_normalisasi
    protected $allowedFields = ['kode_kriteria', 'kode_alternatif', 'hasil_normalisasi'];

    public function getNormalisasi()
    {
        // Ambil semua data dari view v_normalisasi
        return $this->findAll();
    }
}
