<?php

namespace App\Controllers;

class Resep extends BaseController
{
	public function index()
	{
        $data =[
            'title' => 'Tugas Checkpoin 2'
        ];
		return view('Resep/index', $data);
	}

    public function list(){
        return view('Resep/list');
    }
}
