<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class Alternatif extends Controller
{
    // Menampilkan data alternatif
    public function index()
    {
        $db = \Config\Database::connect();

        // Mengambil data alternatif dari tabel data_alternatif
        $query = $db->table('data_alternatif')
            ->select('id_alternatif, kode_alternatif, nama_alternatif')
            ->get();

        // Mengambil hasil query dalam bentuk array
        $data['alternatif'] = $query->getResultArray();

        // Menampilkan view alternatif dengan data yang diambil
        return view('alternatif', $data);
    }

    // Menampilkan form untuk menambah alternatif
    public function create()
    {
        return view('alternatif_create');
    }

    // Menyimpan data alternatif baru
    public function store()
    {
        // Validasi input data
        $validation = \Config\Services::validation();

        if (!$this->validate([
            'kode_alternatif' => 'required',
            'nama_alternatif' => 'required',
        ])) {
            return redirect()->to('alternatif/create')->withInput()->with('validation', $validation->getErrors());
        }

        // Ambil data dari form
        $kode_alternatif = $this->request->getPost('kode_alternatif');
        $nama_alternatif = $this->request->getPost('nama_alternatif');

        // Menyimpan data ke dalam tabel
        $db = \Config\Database::connect();
        $db->table('data_alternatif')->insert([
            'kode_alternatif' => $kode_alternatif,
            'nama_alternatif' => $nama_alternatif,
        ]);

        // Redirect ke halaman utama alternatif setelah data disimpan
        return redirect()->to('alternatif');
    }

    // Menampilkan form untuk mengedit alternatif
    public function edit($id)
    {
        $db = \Config\Database::connect();

        // Mengambil data alternatif berdasarkan ID
        $query = $db->table('data_alternatif')->getWhere(['id_alternatif' => $id]);
        $data['alternatif'] = $query->getRowArray();

        // Menampilkan form edit dengan data yang ada
        return view('alternatif_edit', $data);
    }

    // Memperbarui data alternatif
    public function update($id)
    {
        // Validasi input data
        $validation = \Config\Services::validation();

        if (!$this->validate([
            'kode_alternatif' => 'required',
            'nama_alternatif' => 'required',
        ])) {
            return redirect()->to("alternatif/edit/$id")->withInput()->with('validation', $validation->getErrors());
        }

        // Ambil data dari form
        $kode_alternatif = $this->request->getPost('kode_alternatif');
        $nama_alternatif = $this->request->getPost('nama_alternatif');

        // Memperbarui data di dalam tabel
        $db = \Config\Database::connect();
        $db->table('data_alternatif')
            ->where('id_alternatif', $id)
            ->update([
                'kode_alternatif' => $kode_alternatif,
                'nama_alternatif' => $nama_alternatif,
            ]);

        // Redirect ke halaman utama alternatif setelah data diperbarui
        return redirect()->to('alternatif');
    }

    // Menghapus data alternatif
    public function delete($id)
    {
        $db = \Config\Database::connect();

        // Menghapus data alternatif berdasarkan ID
        $db->table('data_alternatif')->delete(['id_alternatif' => $id]);

        // Redirect ke halaman utama alternatif setelah data dihapus
        return redirect()->to('alternatif');
    }
}
