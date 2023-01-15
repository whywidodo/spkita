<?php

namespace App\Controllers;

use App\Models\HitungModel;
use App\Models\HitungUpModel;
use App\Models\PendaftarModel;
use App\Models\PendaftarUpModel;
use App\Models\UserModel;

class Register extends BaseController
{
   protected $model;
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
      helper(['form']);
      return view('register');
   }

   public function auth()
   {
      $session = session();
      $model = new UserModel();
      $nama = $this->request->getPost('nama');
      $email = $this->request->getPost('email');
      // $username = $this->request->getPost('username');
      $password = $this->request->getPost('password');
      $confirm_password = $this->request->getPost('repassword');

      if ($password == $confirm_password) {
         $data = [
            'nama_lengkap' => $nama,
            'email' => $email,
            'password' => md5($password),
            'akses' => "users"
         ];
         $model->insert($data);
         if ($data) {
            $this->pendaftarModel->save([
               'email_pendaftar' => $email,
            ]);
            $this->hitungModel->save([
               'email' => $email,
            ]);
            session()->setFlashdata('flash', 'register');
            return redirect()->to(base_url('login'));
         } else {
            session()->setFlashdata('flash', $this->model->errors());
            return redirect()->back();
         }
      } else {
         session()->setFlashdata('flash', 'confirm');
         return redirect()->back();
      }
   }
}
