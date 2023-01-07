<?php

namespace App\Models;

use CodeIgniter\Model;

class HitungModel extends Model
{
   protected $table = 'tbl_hitung';
   protected $primaryKey = 'nisn';
   protected $allowedFields = ['nisn', 'asal_sekolah', 'tahun_lulus', 'nilai_rata', 'nama_ortu', 'status_ortu', 'pekerjaan_ortu', 'penghasilan_ortu', 'tanggungan_ortu'];
   protected $returnType       = 'array';
   protected $useTimestamps    = false;

   public function getHitung($slug = false)
   {
      if ($slug == false) {
         return $this->findAll();
      } else {
         return $this->where(['nisn' => $slug])->first();
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
