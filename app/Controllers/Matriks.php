<?php

namespace App\Controllers;

use App\Models\MatriksModel;
use App\Models\AlternatifModel;
use App\Models\KriteriaModel;

class Matriks extends BaseController
{
    protected $matriksModel;
    protected $alternatifModel;
    protected $kriteriaModel;

    public function __construct()
    {
        // Load semua model
        $this->matriksModel = new MatriksModel();
        $this->alternatifModel = new AlternatifModel();
        $this->kriteriaModel = new KriteriaModel();
    }

    public function index()
    {
        // Ambil data matriks
        $data['matrix'] = $this->matriksModel->findAll();
        return view('matrix_view', $data);
    }

    public function create()
    {
        // Ambil data alternatif dan kriteria untuk form create
        $data['alternatif'] = $this->alternatifModel->findAll();
        $data['kriteria'] = $this->kriteriaModel->findAll();
        return view('matrix_create', $data);
    }

    public function store()
    {
        // Validasi input
        if ($this->validate([
            'kode_alternatif' => 'required',
            'kode_kriteria'   => 'required',
            'value'           => 'required|numeric',
        ])) {
            // Simpan data ke database
            $this->matriksModel->save([
                'kode_alternatif' => $this->request->getPost('kode_alternatif'),
                'kode_kriteria'   => $this->request->getPost('kode_kriteria'),
                'value'           => $this->request->getPost('value'),
            ]);
            return redirect()->to('/matriks')->with('success', 'Data berhasil disimpan.');
        }

        return redirect()->back()->withInput()->with('error', 'Data tidak valid.');
    }

    public function edit($id)
    {
        // Ambil data matriks berdasarkan ID
        $data['matrix'] = $this->matriksModel->find($id);

        // Ambil data alternatif dan kriteria
        $data['alternatif'] = $this->alternatifModel->findAll();
        $data['kriteria'] = $this->kriteriaModel->findAll();

        return view('matrix_edit', $data);
    }

    public function update($id)
    {
        // Validasi input
        if ($this->validate([
            'kode_alternatif' => 'required',
            'kode_kriteria'   => 'required',
            'value'           => 'required|numeric',
        ])) {
            // Update data di database
            $this->matriksModel->update($id, [
                'kode_alternatif' => $this->request->getPost('kode_alternatif'),
                'kode_kriteria'   => $this->request->getPost('kode_kriteria'),
                'value'           => $this->request->getPost('value'),
            ]);
            return redirect()->to('/matriks')->with('success', 'Data berhasil diperbarui.');
        }

        return redirect()->back()->withInput()->with('error', 'Data tidak valid.');
    }

    public function delete($id)
    {
        // Hapus data
        $this->matriksModel->delete($id);
        return redirect()->to('/matriks')->with('success', 'Data berhasil dihapus.');
    }
}
