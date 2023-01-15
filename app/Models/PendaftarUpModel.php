<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarUpModel extends Model
{
   protected $table = 'tbl_pendaftar';
   protected $primaryKey = 'email_pendaftar';
   protected $allowedFields = ['nisn_pendaftar', 'nama_pendaftar', 'email_pendaftar', 'jk_pendaftar', 'tgl_pendaftar', 'alamat_pendaftar', 'hp_pendaftar', 'status_beasiswa'];
   protected $returnType       = 'array';
   protected $useTimestamps    = false;
}
