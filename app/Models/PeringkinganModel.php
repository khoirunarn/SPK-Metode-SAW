<?php

namespace App\Models;

use CodeIgniter\Model;

class PeringkinganModel extends Model
{
    protected $table = 'peringkingan'; // Nama view database
    protected $primaryKey = 'kode_alternatif'; // Primary key
    protected $allowedFields = ['kode_alternatif', 'skor_total', 'peringkat']; // Kolom yang diizinkan
}
