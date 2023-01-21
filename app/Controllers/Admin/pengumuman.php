<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\HitungankuModel;
use App\Models\PengumumanModel;

class Pengumuman extends BaseController
{
   protected $pengumumanModel;
   protected $hitungankuModel;
   public function __construct()
   {
      $this->pengumumanModel = new PengumumanModel();
      $this->hitungankuModel = new HitungankuModel();
   }

   public function index()
   {

      $bobotNilai = 0.3;
      $bobotPenghasilan = 0.5;
      $bobotTanggungan = 0.2;
      $dataPenghasilan = $this->pengumumanModel->getPenghasilanMin();
      $dataNilai = $this->pengumumanModel->getNilaiMax();
      $dataTanggungan = $this->pengumumanModel->getTanggunganMax();
      $dataPengumuman = $this->pengumumanModel->getPengumuman();
      foreach ($dataPengumuman as $data) :
         if ($dataPenghasilan == 0) {
            $normPenghasilan = 0.1;
         } else {
            $normPenghasilan = $dataPenghasilan / $data['penghasilan_ortu'];
         }
         $normNilai = $data['nilai_rata'] / $dataNilai;
         $normTanggungan = $data['tanggungan_ortu'] / $dataTanggungan;

         $hasil = ($bobotNilai * $normNilai) + ($bobotPenghasilan * $normPenghasilan) + ($bobotTanggungan * $normTanggungan);

         $dataku[] = [
            'email' => $data['email'],
            'nisn' => $data['nisn'],
            'asal_sekolah' => $data['asal_sekolah'],
            'tahun_lulus' => $data['tahun_lulus'],
            'nilai_rata' => $data['nilai_rata'],
            'bukti_nilai' => $data['bukti_nilai'],
            'nama_ortu' => $data['nama_ortu'],
            'status_ortu' => $data['status_ortu'],
            'pekerjaan_ortu' => $data['pekerjaan_ortu'],
            'penghasilan_ortu' => $data['penghasilan_ortu'],
            'tanggungan_ortu' => $data['tanggungan_ortu'],
            'norm_nilai' => $normNilai,
            'norm_penghasilan' => $normPenghasilan,
            'norm_tanggungan' => $normTanggungan,
            'hasil_akhir' => $hasil,

         ];
      endforeach;
      $this->hitungankuModel->truncate();
      $this->hitungankuModel->insertBatch($dataku);

      $dataFix = [
         'dataFix' => $this->hitungankuModel->getHitunganku()
      ];

      return view('admin/pengumuman', $dataFix);
   }
}
