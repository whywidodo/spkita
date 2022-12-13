<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class Profile extends BaseController
{
   public function index()
   {
      return view('users/index');
   }
}
