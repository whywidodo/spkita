<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
   protected $model;

   public function index()
   {
      helper(['form']);
      return view('register');
   }

   public function auth()
   {
      $session = session();
      $model = new UserModel();
      $nama_lengkap = $this->request->getPost('nama_lengkap');
      $username = $this->request->getPost('username');
      $password = $this->request->getPost('password');
      $confirm_password = $this->request->getPost('confirm_password');

      $data =[
         'nama_lengkap' => $nama_lengkap,
         'username' => $username,
         'password' => $password,
         'confirm_password' => $confirm_password
      ];

      $model->insert($data);
     if($data){
      session()->setFlashdata('success', 'Register Berhasil!');
      return redirect()->to(base_url('login'));
     }else{
      session()->setFlashdata('error', $this->model->errors());
      return redirect()->back();
     }
   }

}

