<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use App\Models\PendaftarModel;
use App\Models\HitungModel;
use App\Models\HitungUpModel;
use App\Models\PendaftarUpModel;

class Pendaftaran extends BaseController
{
   protected $pendaftarModel;
   protected $pendaftarUpModel;
   protected $hitungModel;
   protected $hitungUpModel;
   public function __construct()
   {
      $this->pendaftarModel = new PendaftarModel();
      $this->pendaftarUpModel = new PendaftarUpModel();
      $this->hitungModel = new HitungModel();
      $this->hitungUpModel = new HitungUpModel();
   }

   public function index()
   {
      $data = [
         'dataBiodata' => $this->pendaftarModel->getAllPendaftar(),
         'dataHitung' => $this->hitungModel->getHitung()
      ];
      return view('users/pendaftaran', $data);
   }

   public function biodata()
   {
      $email = session()->get('email');
      $jk = $this->request->getPost('gender');
      $jenkel = $jk == "Laki-laki" ? "Laki-laki" : "Perempuan";
      $this->pendaftarUpModel->update($email, [
         'nama_pendaftar' => $this->request->getPost('nama'),
         'email_pendaftar' => $this->request->getPost('email'),
         'jk_pendaftar' => $jenkel,
         'tgl_pendaftar' => $this->request->getPost('tanggal'),
         'alamat_pendaftar' => $this->request->getPost('alamat'),
         'hp_pendaftar' => $this->request->getPost('notelp'),
         'status_beasiswa' => 'null'

      ]);

      return redirect()->to('/users/pendaftaran');
   }

   public function sekolah()
   {
      $email = session()->get('email');
      $this->hitungUpModel->update($email, [
         'nisn' => $this->request->getPost('nisn'),
         'asal_sekolah' => $this->request->getPost('sekolah'),
         'tahun_lulus' => $this->request->getPost('lulus'),
         'nilai_rata' => $this->request->getPost('rata'),
         'nama_ortu' => '',
         'status_ortu' => '',
         'pekerjaan_ortu' => '',
         'penghasilan_ortu' => '',
         'tanggunan_ortu' => ''

      ]);
      $this->pendaftarUpModel->update($email, [
         'nisn_pendaftar' => $this->request->getPost('nisn'),
      ]);
      return redirect()->to('/users/pendaftaran');
   }

   public function keluarga()
   {
      $email = session()->get('email');
      $this->hitungUpModel->update($email, [
         'nama_ortu' => $this->request->getPost('namawali'),
         'status_ortu' => $this->request->getPost('statuswali'),
         'pekerjaan_ortu' => $this->request->getPost('pekerjaanwali'),
         'penghasilan_ortu' => $this->request->getPost('penghasilanwali'),
         'tanggungan_ortu' => $this->request->getPost('tanggunganwali')

      ]);
      return redirect()->to('/users/pendaftaran');
   }
}
