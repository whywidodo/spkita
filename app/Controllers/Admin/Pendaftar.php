<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pendaftar extends BaseController
{
   public function index()
   {
      return view('admin/pendaftar');
   }
}
