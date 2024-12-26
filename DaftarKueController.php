<?php

namespace App\Controllers\Admin;

use App\Models\BakeryModel;
use App\Controllers\BaseController;

class DaftarKueController extends BaseController
{
    protected $bakeryModel;

    public function __construct()
    {
        // Inisialisasi model BakeryModel untuk operasi database
        $this->bakeryModel = new BakeryModel();
    }

    // Menampilkan form konfirmasi hapus kue
    public function kueHapus($id)
    {
        // Cari kue berdasarkan ID
        $kue = $this->bakeryModel->find($id);

        // Jika kue tidak ditemukan, redirect ke daftar kue
        if (!$kue) {
            return redirect()->to('/admin/daftar-kue');
        }

        // Tampilkan halaman konfirmasi hapus dengan data kue
        return view('admin/daftar-kue-hapus', ['kue' => $kue]);
    }

    // Menangani penghapusan kue setelah konfirmasi
    public function deleteKue($id)
    {
        // Pastikan data kue ada sebelum menghapusnya
        $kue = $this->bakeryModel->find($id);
        
        // Jika kue tidak ditemukan, redirect ke daftar kue
        if (!$kue) {
            return redirect()->to('/admin/daftar-kue');
        }

        // Hapus kue dari database
        $this->bakeryModel->delete($id);

        // Redirect kembali ke halaman daftar kue
        return redirect()->to('/admin/daftar-kue');
    }
}


