<?php

namespace App\Models;

use CodeIgniter\Model;

class HitungUpModel extends Model
{
   protected $table = 'tbl_hitung';
   protected $primaryKey = 'email';
   protected $allowedFields = ['email', 'nisn', 'asal_sekolah', 'tahun_lulus', 'nilai_rata', 'nama_ortu', 'status_ortu', 'pekerjaan_ortu', 'penghasilan_ortu', 'tanggungan_ortu'];
   protected $returnType       = 'array';
   protected $useTimestamps    = false;
}
