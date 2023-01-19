<?php

namespace App\Models;

use CodeIgniter\Model;

class HitungModel extends Model
{
   protected $table = 'tbl_hitung';
   protected $primaryKey = 'id_hitung';
   protected $allowedFields = ['email', 'nisn', 'asal_sekolah', 'tahun_lulus', 'nilai_rata', 'bukti_nilai', 'nama_ortu', 'status_ortu', 'pekerjaan_ortu', 'penghasilan_ortu', 'tanggungan_ortu'];
   protected $returnType       = 'array';
   protected $useTimestamps    = false;

   public function getHitung()
   {
      $email = session()->get('email');
      if ($email == false) {
         return $this->findAll();
      } else {
         return $this->where(['email' => $email])->first();
      }
   }
   public function getHitungTambahan($slug = false)
   {
      $db      = \Config\Database::connect();
      if ($slug == false) {
         $builder = $db->table('tbl_hitung');
         $query = $builder->get();
         return $query->getResultArray();
      } else {
         $builder = $db->table('tbl_hitung')->where('nisn', $slug);
         $query = $builder->get();
         return $query->getResultArray();
      }
   }
}
