<?php

namespace App\Controllers\Users;

use CodeIgniter\Files\File;
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
      $data = [
         'dataBiodata' => $this->pendaftarModel->getAllPendaftar(),
         'dataHitung' => $this->hitungModel->getHitung()
      ];

      session()->setFlashdata('flash', 'ditambahkan');
      return view('/users/pendaftaran', $data);
   }

   public function sekolah()
   {
      // Ambil Gambar Dari Device
      $img = $this->request->getFile('userfile');



      // Upload Gambar
      $validationRule = [
         'userfile' => [
            'label' => 'Image File',
            'rules' => [
               'uploaded[userfile]',
               'is_image[userfile]',
               'mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
               'max_size[userfile,100]',
               'max_dims[userfile,1024,768]',
            ],
         ],
      ];
      if (!$this->validate($validationRule)) {
         $data = ['errors' => $this->validator->getErrors()];

         return view('/users/pendaftaran', $data);
      }


      $namaFile = "";
      if (!$img->hasMoved()) {
         $namaFile = $img->getRandomName();
         $filepath = $img->move(ROOTPATH . 'public/assets/images/berkas_nilai/', $namaFile);
         $data = [
            'uploaded_fileinfo' => new File($filepath),
            'dataBiodata' => $this->pendaftarModel->getAllPendaftar(),
            'dataHitung' => $this->hitungModel->getHitung(),
            'namaFileNilai' => $namaFile
         ];
      }



      $email = session()->get('email');
      $this->hitungUpModel->update($email, [
         'nisn' => $this->request->getPost('nisn'),
         'asal_sekolah' => $this->request->getPost('sekolah'),
         'tahun_lulus' => $this->request->getPost('lulus'),
         'nilai_rata' => $this->request->getPost('rata'),
         'bukti_nilai' => $namaFile,
         'nama_ortu' => '',
         'status_ortu' => '',
         'pekerjaan_ortu' => '',
         'penghasilan_ortu' => '',
         'tanggunan_ortu' => ''

      ]);
      $this->pendaftarUpModel->update($email, [
         'nisn_pendaftar' => $this->request->getPost('nisn'),
      ]);


      session()->setFlashdata('flash', 'ditambahkan');
      return view('/users/pendaftaran', $data);
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

      session()->setFlashdata('flash', 'ditambahkan');
      return redirect()->to('/users/pendaftaran');
   }
}
