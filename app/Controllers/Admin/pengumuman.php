<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PengumumanModel;

class Pengumuman extends BaseController
{
   protected $pengumumanModel;
   public function __construct()
   {
      $this->pengumumanModel = new PengumumanModel();
   }

   public function index()
   {
      $data = [
         'bobotNilai' => 3,
         'bobotPenghasilan' => 5,
         'bobotTanggungan' => 4,
         'dataPengumuman' => $this->pengumumanModel->getPengumuman(),
         'dataNilai' => $this->pengumumanModel->getNilaiMax(),
         'dataPenghasilan' => $this->pengumumanModel->getPenghasilanMin(),
         'dataTanggungan' => $this->pengumumanModel->getTanggunganMax(),
      ];
      // dd($data['dataPengumuman']['0']['nisn']);
      // dd($data);

      return view('admin/pengumuman', $data);
   }
}
