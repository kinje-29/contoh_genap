<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\PelayananModel;
use App\Models\LoketModel;

class Pelayanan extends BaseController
{
    public function __construct()
    {
        $this->AntrianModel = new AntrianModel();
        $this->PelayananModel = new PelayananModel();
        $this->LoketModel = new LoketModel;
    }

    public function index()
    {
        $data['pelayanan'] = $this->AntrianModel->getAll();
        return view('/pelayanan/index', $data);
    }

    public function daftar()
    {
        return view('/pelayanan/daftar_layanan');
    }


    public function simpan()
    {
        $nama = $this->request->getVar('nama');
        $kode = $this->request->getVar('kode');

        $data = [
            'nama' => $nama,
            'kode' => $kode
        ];

        $this->PelayananModel->save($data);
        $this->LoketModel->save($data);
        return redirect()->to('/pelayanan/daftar_layanan');
    }

    public function tampil(){
        
    }
}
