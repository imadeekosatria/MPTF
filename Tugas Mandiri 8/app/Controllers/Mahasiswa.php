<?php

namespace App\Controllers;

use App\Models\DataModel;

class Mahasiswa extends BaseController
{
	protected $mhs;
	public function __construct(){
		$this->mhs = new DataModel();
	}
	public function index()
	{
		$list = $this->mhs->findAll();
		$data = [
			'title' => 'Daftar Mahasiswa',
			'mhs' => $list
		];
		return view('Mahasiswa/data', $data);
	}

	public function tambah(){
		$data = [
			'title' => 'Tambah Data'
		];
		return view('Mahasiswa/tambah', $data);
	}

	public function simpan(){
		//ingat selalu gunakan var mhs untuk crud -> masuk ke model
		$this->mhs->save([
			'nim' => $this->request->getVar('nim'),
			'nama' => $this->request->getVar('nama'),
			'alamat' => $this->request->getVar('alamat')
		]);
		return redirect()->to('/Mahasiswa');
	}
}
