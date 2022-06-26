<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\PelayananModel;
use App\Models\LoketModel;
// use CodeIgniter\Debug\Toolbar\Collectors\BaseCollector;

class Loket extends BaseController
{
  public function __construct()
  {
    $this->AntrianModel = new AntrianModel();
    $this->PelayananModel = new PelayananModel();
    $this->LoketModel = new LoketModel;
  }

  public function index()
  {
    $data['loket'] = $this->AntrianModel->getAll();
    return view('/loket/index' , $data);
  }

}