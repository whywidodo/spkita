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
      session()->setFlashdata('flash', 'ditambahkan');
      return redirect()->to('/administrator/kriteria');
   }

   public function edit($id)
   {
      $this->kriteriaModel->update($id, [
         'kode_kriteria' => $this->request->getPost('editKode'),
         'nama_kriteria' => $this->request->getPost('editNama'),
         'bobot_kriteria' => $this->request->getPost('editBobot'),
         'jenis_kriteria' => $this->request->getPost('editJenis')

      ]);
      session()->setFlashdata('flash', 'dirubah');
      return redirect()->to('/administrator/kriteria');
   }

   public function hapus($kode)
   {
      $this->kriteriaModel->where('kode_kriteria', $kode)->delete();

      session()->setFlashdata('flash', 'dihapus');
      return redirect()->to('/administrator/kriteria');
   }
}
