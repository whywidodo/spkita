<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Profile extends BaseController
{
   protected $userModel;
   public function __construct()
   {
      $this->userModel = new UserModel();
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
         $this->userModel->update($email, [
            'nama_lengkap' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username')
         ]);
         session()->setFlashdata('flash', 'dirubah');
      } else {
         if ($password == $ulangiPass) {
            $this->userModel->update($email, [
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
