<?php

namespace App\Controllers;

class Film extends BaseController
{
    public function index(){
        return redirect('/listfilm');
    }
}
