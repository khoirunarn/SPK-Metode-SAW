<?php

namespace App\Controllers;

use App\Models\PeringkinganModel;

class Peringkingan extends BaseController
{
    protected $peringkinganModel;

    public function __construct()
    {
        $this->peringkinganModel = new PeringkinganModel();
    }

    public function index()
    {
        // Ambil data perangkingan dari database
        $data['peringkingan'] = $this->peringkinganModel->findAll();

        // Kirim data ke view
        return view('peringkingan_view', $data);
    }

    public function hitungUlang()
    {
        // Proses perhitungan ulang perangkingan
        // Karena ini menggunakan view database, kita tidak perlu operasi tambahan.
        // Cukup refresh halaman perangkingan.
        return redirect()->to('/peringkingan')->with('success', 'Perangkingan berhasil dihitung ulang.');
    }
}
