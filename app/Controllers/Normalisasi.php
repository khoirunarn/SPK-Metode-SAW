<?php

namespace App\Controllers;

use App\Models\NormalisasiModel;

class Normalisasi extends BaseController
{
    protected $normalisasiModel;

    public function __construct()
    {
        $this->normalisasiModel = new NormalisasiModel();
    }

    public function index()
    {
        // Ambil data dari view v_normalisasi
        $data['normalisasi'] = $this->normalisasiModel->getNormalisasi();

        // Kirim data ke view
        return view('normalisasi_view', $data);
    }

    public function hitungNormalisasi()
    {
        // Data normalisasi dihitung di view database, cukup refresh data di sini
        $data['normalisasi'] = $this->normalisasiModel->getNormalisasi();

        // Redirect atau tampilkan ulang halaman
        return view('normalisasi_view', $data);
    }
}
