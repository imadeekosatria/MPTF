<?php

//Lokasi Controller
namespace App\Controllers\Users;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index(){
        //return redirect('Film/listfilm');
        echo 'Ini Controller User';
    }
}
