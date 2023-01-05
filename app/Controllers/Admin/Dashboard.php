<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
   public function index()
   {
      return view('admin/index');
   }

   public function logout()
   {
      session()->setFlashdata('flash', 'Logout');

      return redirect()->to('/login');
   }
}
