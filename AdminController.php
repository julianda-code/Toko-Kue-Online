<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BakeryModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function daftarKue()
    {
        $kueModel = new BakeryModel();

        $data['bakerys'] = $kueModel->findAll();

        return view('admin/daftar-kue', $data);
    }

    public function daftarKueTambah()
    {
        return view('admin/daftar-kue-tambah');
    }

    public function createKue()
    {
        $data = $this->request->getPost();
        $file = $this->request->getFile('gambar');

        if ($file && !$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path;
        }

        $kueModel = new BakeryModel();

        if ($kueModel->insert($data, false)) {
            return redirect()->to('admin/daftar-kue')->with('berhasil', 'Data berhasil disimpan!');
        } else {
            return redirect()->to('admin/daftar-kue')->with('gagal', 'Data gagal disimpan!');
        }
    }

    public function daftarKueEdit($id)
    {
        $kueModel = new BakeryModel();
        $kue = $kueModel->find($id);

        if (!$kue) {
            return redirect()->to('admin/daftar-kue')->with('gagal', 'Data kue tidak ditemukan!');
        }

        return view('admin/daftar-kue-edit', ['kue' => $kue]);
    }

    public function changeKue($id)
    {
        $kueModel = new BakeryModel();
        $existingKue = $kueModel->find($id);

        if (!$existingKue) {
            return redirect()->to('admin/daftar-kue')->with('gagal', 'Data kue tidak ditemukan!');
        }

        $data = $this->request->getPost();
        $file = $this->request->getFile('gambar');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path;
        } else {
            $data['gambar'] = $existingKue['gambar'];  // Menjaga gambar yang lama jika tidak ada file baru
        }

        if ($kueModel->update($id, $data)) {
            return redirect()->to('admin/daftar-kue')->with('berhasil', 'Data berhasil diperbarui!');
        } else {
            return redirect()->to('admin/daftar-kue')->with('gagal', 'Data gagal diperbarui!');
        }
    }

    public function hapusKue($id)
    {
        $kueModel = new BakeryModel();

        $kue = $kueModel->find($id);

        if ($kue) {
            $kueModel->delete($id);

            return redirect()->to('/admin/daftar-kue')->with('success', 'Kue berhasil dihapus.');
        }

        return redirect()->to('/admin/daftar-kue')->with('error', 'Kue tidak ditemukan.');
    }

    public function transaksi()
    {
        return view('admin/transaksi');
    }

    public function transaksiUbahStatus()
    {
        return view('admin/transaksi-ubah-status');
    }

    public function transaksiHapus()
    {
        return view('admin/transaksi-hapus');
    }

    public function pelanggan()
    {
        return view('admin/pelanggan');
    }

    public function pelangganHapus()
    {
        return view('admin/pelanggan-hapus');
    }
}
