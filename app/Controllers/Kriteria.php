<?php

namespace App\Controllers;

use App\Models\KriteriaModel;

class Kriteria extends BaseController
{
    protected $kriteriaModel;

    public function __construct()
    {
        $this->kriteriaModel = new KriteriaModel();
    }

    // Menampilkan data kriteria
    public function index()
    {
        $data['kriteria'] = $this->kriteriaModel->findAll();
        return view('kriteria', $data);
    }

    // Menampilkan form tambah kriteria
    public function create()
    {
        return view('kriteria_create');
    }

    // Menyimpan data kriteria baru
    public function store()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'kode_kriteria' => 'required|is_unique[data_kriteria.kode_kriteria]',
            'nama_kriteria' => 'required',
            'bobot_kriteria' => 'required|numeric',
            'type_kriteria' => 'required|in_list[Benefit,Cost]'
        ]);

        if (!$validation->run($this->request->getPost())) {
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }

        $this->kriteriaModel->save([
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'type_kriteria' => $this->request->getPost('type_kriteria'),
            'bobot_kriteria' => $this->request->getPost('bobot_kriteria'),
        ]);

        return redirect()->to('/kriteria')->with('success', 'Data Kriteria berhasil ditambahkan.');
    }

    // Menampilkan form edit kriteria
    public function edit($id)
    {
        $data['kriteria'] = $this->kriteriaModel->find($id);

        if (!$data['kriteria']) {
            return redirect()->to('/kriteria')->with('error', 'Data Kriteria tidak ditemukan.');
        }

        return view('kriteria_edit', $data);
    }

    // Memperbarui data kriteria
    public function update($id)
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'kode_kriteria' => 'required',
            'nama_kriteria' => 'required',
            'bobot_kriteria' => 'required|numeric',
            'type_kriteria' => 'required|in_list[Benefit,Cost]',
        ]);

        if (!$validation->run($this->request->getPost())) {
            return redirect()->back()->withInput()->with('validation', $validation->getErrors());
        }

        $this->kriteriaModel->update($id, [
            'kode_kriteria' => $this->request->getPost('kode_kriteria'),
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'type_kriteria' => $this->request->getPost('type_kriteria'),
            'bobot_kriteria' => $this->request->getPost('bobot_kriteria'),
        ]);

        return redirect()->to('/kriteria')->with('success', 'Data Kriteria berhasil diperbarui.');
    }

    // Menghapus data kriteria
    public function delete($id)
    {
        $this->kriteriaModel->delete($id);
        return redirect()->to('/kriteria')->with('success', 'Data Kriteria berhasil dihapus.');
    }
}
