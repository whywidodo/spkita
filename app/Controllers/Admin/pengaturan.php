<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pengaturan extends BaseController
{
   public function index()
   {
      return view('admin/pengaturan');
   }
}
