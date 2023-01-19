<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\HitungUserModel;
use App\Models\HitungPendaftarModel;

class Dashboard extends BaseController
{
   protected $hitungUser;
   protected $hitungPendaftar;
   public function __construct()
   {
      // $this->request = service("request");
      $this->hitungUser = new HitungUserModel();
      $this->hitungPendaftar = new HitungPendaftarModel();
   }
   public function index()
   {
      $data = [
         'total_user' => $this->hitungUser->hitungJumlahUser(),
         'total_pendaftar' => $this->hitungPendaftar->hitungJumlahPendaftar()
      ];
      // dd($data);
      return view('admin/index', $data);
      
   }

   public function logout()
   {
      session()->setFlashdata('flash', 'Logout');

      return redirect()->to('/login');
   }
}
