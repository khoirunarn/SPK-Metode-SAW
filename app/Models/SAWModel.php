<?php

namespace App\Models;

use CodeIgniter\Model;

class SAWModel extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    // Ambil semua data kriteria
    public function getKriteria()
    {
        return $this->db->table('data_kriteria')->get()->getResultArray();  // Menggunakan getResultArray() untuk hasil berupa array
    }

    // Ambil semua data alternatif
    public function getAlternatif()
    {
        return $this->db->table('data_alternatif')->get()->getResultArray();  // Menggunakan getResultArray() untuk hasil berupa array
    }

    // Ambil semua nilai dari tabel nilai
    public function getNilai()
    {
        return $this->db->table('nilai')->get()->getResultArray();  // Menggunakan getResultArray() untuk hasil berupa array
    }
}
