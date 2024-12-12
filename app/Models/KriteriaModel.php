<?php

namespace App\Models;
use CodeIgniter\Model;

class KriteriaModel extends Model
{
    protected $table = 'data_kriteria';
    protected $primaryKey = 'id_kriteria';
    protected $allowedFields = ['kode_kriteria', 'nama_kriteria', 'type_kriteria', 'bobot_kriteria'];
}
