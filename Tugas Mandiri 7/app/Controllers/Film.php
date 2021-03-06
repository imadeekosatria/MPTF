<?php

namespace App\Controllers;

use App\Models\FilmModel;


class Film extends BaseController{
    protected $film;
    public function __construct(){
        $this->film = new FilmModel();
    }
   
    public function index(){
        $list = $this->film->findAll();
        
        $data = [
            //'title' & 'film' adalah var yang digunakan di listfilm.php
            'title' => 'List Film',
            'film' => $list
        ];
        
        return view('Film/listfilm', $data);
    }
}