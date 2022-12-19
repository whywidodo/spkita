<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class Pendaftaran extends BaseController
{
   public function index()
   {
      return view('users/pendaftaran');
   }
}
