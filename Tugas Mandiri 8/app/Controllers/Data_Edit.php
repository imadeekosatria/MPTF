<?php

namespace App\Controllers;

use App\Models\DataModel;


class Data_Edit extends BaseController{
    protected $mhs;
    public function __construct(){
        $this->mhs = new DataModel();
    }
   
    public function index(){
        $list = $this->mhs->findAll();
        
        $data = [
            //'title' & 'mhs' adalah var yang digunakan di listfilm.php
            'title' => 'Daftar Mahasiswa',
            'mhs' => $list
        ];
        
        return view('Mahasiswa/data', $data);
    }
}