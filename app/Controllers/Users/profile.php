<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\UserUpModel;

class Profile extends BaseController
{
   protected $userModel;
   protected $userUpModel;
   public function __construct()
   {
      $this->userModel = new UserModel();
      $this->userUpModel = new UserUpModel();
   }

   public function index()
   {
      return view('users/index');
   }

   public function akun($email)
   {
      $password = $this->request->getPost('password');
      $ulangiPass = $this->request->getPost('ulangipassword');
      if ($password == "") {
         $this->userUpModel->update($email, [
            'nama_lengkap' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username')
         ]);
         session()->setFlashdata('flash', 'dirubah');
      } else {
         if ($password == $ulangiPass) {
            $this->userUpModel->update($email, [
               'nama_lengkap' => $this->request->getPost('nama'),
               'email' => $this->request->getPost('email'),
               'username' => $this->request->getPost('username'),
               'password' => md5($password)
            ]);
            session()->setFlashdata('flash', 'dirubah');
         } else {
            session()->setFlashdata('flash', 'gagalrubah');
         }
      }

      $sesiData = [
         'namaLengkap'    => $this->request->getPost('nama'),
         'email'          => $this->request->getPost('email'),
         'username'       => $this->request->getPost('username')
      ];
      session()->set($sesiData);
      return redirect()->to('/users');
   }
}
