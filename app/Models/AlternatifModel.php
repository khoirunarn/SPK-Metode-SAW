<?php

namespace App\Models;

use CodeIgniter\Model;

class AlternatifModel extends Model
{
    protected $table = 'data_alternatif'; // Nama tabel yang digunakan
    protected $primaryKey = 'id_alternatif';
    protected $allowedFields = ['kode_alternatif', 'nama_alternatif'];
}
