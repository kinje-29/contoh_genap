<?php

namespace App\Models;

use CodeIgniter\Model;

class LoketModel extends Model
{
  protected $table ='loket';
  protected $primaryKey = 'id';
  protected $allowedFields = ['nama','keterangan','pelayanan_id'];

  // Menampilkan data
  public function index()
  {
    return $this->findAll();
  }

  // // Pencarian warga
  // public function pencarian($kunci)
  // {
  //   return $this->table('warga')->like('nama',$kunci);
  // }


}