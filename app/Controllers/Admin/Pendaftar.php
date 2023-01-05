<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PendaftarModel;

class Pendaftar extends BaseController
{
   protected $pendaftarModel;
   public function __construct()
   {
      $this->pendaftarModel = new PendaftarModel();
   }

   public function index()
   {
      $data = [
         'dataPendaftar' => $this->pendaftarModel->getPendaftar()
      ];
      return view('admin/pendaftar', $data);
   }

   public function tambah()
   {
      $this->pendaftarModel->save([
         'nisn_pendaftar' => $this->request->getPost('nisnpendaftar'),
         'nama_pendaftar' => $this->request->getPost('namapendaftar'),
         'jk_pendaftar' => $this->request->getPost('jkpendaftar'),
         'alamat_pendaftar' => $this->request->getPost('alamatpendaftar'),
         'hp_pendaftar' => $this->request->getPost('hppendaftar')

      ]);
      return redirect()->to('/administrator/pendaftar');
   }

   public function hapus($kode)
   {
      $this->pendaftarModel->where('nisn_pendaftar', $kode)->delete();

      session()->setFlashdata('flash', 'dihapus');
      return redirect()->to('/administrator/pendaftar');
   }

   public function detail($nisn)
   {
      $data = [
         'dataPribadi' => $this->pendaftarModel->getPendaftar($nisn),
         'dataTambahan' => $this->pendaftarModel->getPendaftarTambahan($nisn),
      ];
      return view('admin/pendaftar-detail', $data);
   }

   public function edit($kode)
   {

      session()->setFlashdata('flash', 'dirubah');
   }
}
