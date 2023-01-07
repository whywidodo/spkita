<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PendaftarModel;
use App\Models\HitungModel;

class Pendaftar extends BaseController
{
   protected $pendaftarModel;
   protected $hitungModel;
   public function __construct()
   {
      $this->pendaftarModel = new PendaftarModel();
      $this->hitungModel = new HitungModel();
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

   public function edit($id)
   {
      $jk = $this->request->getPost('jenkel');
      $jenkel = $jk == "Laki-laki" ? "Laki-laki" : "Perempuan";
      // Edit tbl_pendaftar
      $this->pendaftarModel->update($id, [
         'nisn_pendaftar' => $this->request->getPost('nisn'),
         'nama_pendaftar' => $this->request->getPost('nama'),
         'email_pendaftar' => $this->request->getPost('email'),
         'jk_pendaftar' => $jenkel,
         'tgl_pendaftar' => $this->request->getPost('ttl'),
         'alamat_pendaftar' => $this->request->getPost('alamat'),
         'hp_pendaftar' => $this->request->getPost('hp'),
         'status_beasiswa' => "null"

      ]);
      // Edit tbl_hitung
      $this->hitungModel->update($id, [
         'nisn' => $this->request->getPost('nisn'),
         'asal_sekolah' => $this->request->getPost('sekolah'),
         'tahun_lulus' => $this->request->getPost('lulus'),
         'nilai_rata' => $this->request->getPost('rata'),
         'nama_ortu' => $this->request->getPost('namawali'),
         'status_ortu' => $this->request->getPost('statuswali'),
         'pekerjaan_ortu' => $this->request->getPost('kerjawali'),
         'penghasilan_ortu' => $this->request->getPost('hasilwali'),
         'tanggungan_ortu' => $this->request->getPost('tanggungwali')

      ]);
      session()->setFlashdata('flash', 'dirubah');
      return redirect()->to('/administrator/pendaftar');
   }
}
