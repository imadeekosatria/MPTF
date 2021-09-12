<?php

namespace App\Controllers;

use App\Models\ResepModel;

class Resep extends BaseController
{
	public function index()
	{
        $data =[
            'title' => 'Tugas Checkpoin 2'
        ];
		return view('Resep/index', $data);
	}
    
    
    protected $list;
    public function __construct(){
        $this->list = new ResepModel();
    }

    public function list(){
        $head =$this->list->getHead();
        $one =$this->list->isFirst();
        $getmakan = $this->list->getMakanan();
        $getminuman = $this->list->getMinuman();
        $data = [
            'title' => 'Home Resep',
            'head' => $head,
            'isFirst' => $one,
            'makanan' => $getmakan,
            'minuman' => $getminuman
        ];
        return view('Resep/list', $data);
    }

    //Get Kategori
    public function makanan(){
        $makanan = $this->list->getFullMakanan();
        $data = [
            'title' => 'Daftar Resep Makanan',
            'fullmakanan' => $makanan
        ];
        return view('Resep/list makanan', $data);
    }

    public function minuman() {
        $minuman = $this->list->getFullMinuman();
        $data = [
            'title' => 'Daftar Resep Minuman', 
            'fullminuman' => $minuman
        ];

        return view('Resep/list minuman', $data);
    }

    public function tambah(){
        $data = [
            'title' => 'Tambah Data'
        ];
        return view('Resep/edit', $data);
    }
}
