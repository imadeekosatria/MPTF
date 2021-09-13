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
        return view('Resep/tambah', $data);
    }

    public function delete($id, $kategori) {
        if ($kategori == 'makanan') {
            $this->list->delete($id);
		    return redirect()->to('/Resep/makanan');
        }elseif ($kategori == 'minuman') {
            $this->list->delete($id);
		    return redirect()->to('/Resep/minuman');
        }
	}

    public function edit($id) {
        $edit = $this->list->getData($id);
        $data = [
			'title' => 'Edit Resep',
			'tampil' => $edit
		];

		return view('Resep/edit', $data);
    }

    public function simpan(){
		//ingat selalu gunakan var mhs untuk crud -> masuk ke model
        $kategori =$this->request->getVar('kategori');
		$this->list->save([
			'judul' => $this->request->getVar('judul'),
			'alat' => $this->request->getVar('alat'),
			'petunjuk' => $this->request->getVar('petunjuk'),
            'rating' => $this->request->getVar('rating'),
            'cover' => 'undraw_under_construction_46pa.svg',
            'kategori' => $kategori
		]);
        if ($kategori == 'makanan') {
            return redirect()->to('/Resep/makanan');
        }elseif ($kategori == 'minuman') {
            return redirect()->to('/Resep/minuman');
        }

		
	}

    public function details($id){
        $edit = $this->list->getData($id);
        $data = [
			'title' => 'Edit Resep',
			'tampil' => $edit
		];

		return view('Resep/edit', $data);
    }

    public function update($id){
        $kategori = $this->request->getVar('kategori');
        $rating = $this->request->getVar('rating');
        $this->list->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'alat' => $this->request->getVar('alat'),
            'petunjuk' => $this->request->getVar('petunjuk'),
            'rating' => $rating,
            'kategori' => $kategori
        ]);
        if ($kategori == 'makanan') {
            return redirect()->to('Resep/makanan');
        }elseif ($kategori == 'minuman') {
            return redirect()->to('/Resep/minuman');
        }
    }
}
