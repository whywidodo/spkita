<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaModel extends Model
{
   protected $table = 'tbl_kriteria';
   protected $primaryKey = 'id_kriteria';
   protected $allowedFields = ['kode_kriteria', 'nama_kriteria', 'bobot_kriteria', 'jenis_kriteria'];
   protected $returnType       = 'array';
   protected $useTimestamps    = false;

   public function getKriteria($slug = false)
   {
      if ($slug == false) {
         return $this->findAll();
      } else {
         return $this->where(['kode_kriteria' => $slug])->first();
      }
   }
}
