<?php 
namespace App\Models;

use CodeIgniter\Model;

class HitungUserModel extends Model{
  
  protected $table = 'tbl_user';
  public function hitungJumlahUser()
  {   
      // $db      = \Config\Database::connect();
      $query = $this->db->table('tbl_user');
      if($query->countAllResults()>0)
      {
        return $query->countAllResults();
      }
      else
      {
        return 0;
      }
  }
} 
?>
