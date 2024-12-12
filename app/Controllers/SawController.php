<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use App\Models\KriteriaModel;
use App\Models\NilaiModel;
use App\Models\NormalisasiModel;

class SawController extends BaseController
{
    public function hitung()
{
    $alternatifModel = new AlternatifModel();
    $kriteriaModel = new KriteriaModel();
    $nilaiModel = new NilaiModel();
    $normalisasiModel = new NormalisasiModel();

    // 1. Ambil data kriteria dan alternatif
    $kriteria = $kriteriaModel->findAll();
    $alternatif = $alternatifModel->findAll();

    // 2. Ambil hasil normalisasi
    $normalisasi = $normalisasiModel->findAll();

    // 3. Hitung nilai SAW
    $nilaiSAW = [];
    foreach ($alternatif as $alternatifItem) {
        $totalSAW = 0;
        foreach ($kriteria as $kriteriaItem) {
            // Ambil nilai normalisasi untuk alternatif ini dan kriteria ini
            $nilaiNormalisasi = array_filter($normalisasi, function ($n) use ($alternatifItem, $kriteriaItem) {
                return $n['id_alternatif'] == $alternatifItem['id_alternatif'] && $n['id_kriteria'] == $kriteriaItem['id_kriteria'];
            });
            $nilaiNormalisasi = reset($nilaiNormalisasi); // Ambil nilai pertama (seharusnya hanya satu)

            // Hitung SAW untuk alternatif ini berdasarkan bobot kriteria
            $totalSAW += $nilaiNormalisasi['nilai_normalisasi'] * ($kriteriaItem['bobot_kriteria'] / 100);
        }

        $nilaiSAW[] = [
            'id_alternatif' => $alternatifItem['id_alternatif'],
            'total_saw' => $totalSAW,
        ];
    }

    // 4. Simpan nilai SAW ke database atau tampilkan ke view
    // Contoh: Simpan atau tampilkan hasil SAW sesuai kebutuhan
    // $this->sawModel->insertBatch($nilaiSAW);

    return redirect()->to('/dashboard')->with('message', 'Perhitungan SAW berhasil dilakukan.');
}
}