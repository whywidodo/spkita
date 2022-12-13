<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Kriteria extends BaseController
{
   public function index()
   {
      return view('admin/kriteria');
   }
}
