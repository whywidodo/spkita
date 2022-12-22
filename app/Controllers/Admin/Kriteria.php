<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;

class Kriteria extends BaseController
{
   protected $kriteriaModel;
   public function __construct()
   {
      $this->kriteriaModel = new KriteriaModel();
   }

   public function index()
   {
      $data = [
         'dataKriteria' => $this->kriteriaModel->getKriteria()
      ];
      return view('admin/kriteria', $data);
   }

   public function tambah()
   {
      $this->kriteriaModel->save([
         'kode_kriteria' => $this->request->getPost('kodekriteria'),
         'nama_kriteria' => $this->request->getPost('namakriteria'),
         'bobot_kriteria' => $this->request->getPost('bobotkriteria'),
         'jenis_kriteria' => $this->request->getPost('jeniskriteria')

      ]);
      return redirect()->to('/administrator/kriteria');
   }

   public function hapus($kode)
   {
      $this->kriteriaModel->where('kode_kriteria', $kode)->delete();

      return redirect()->to('/administrator/kriteria');
   }
}
