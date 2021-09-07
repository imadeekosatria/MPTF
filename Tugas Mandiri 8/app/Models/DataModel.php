<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'mhs';
    protected $allowedFields = ['id','nim', 'nama', 'alamat'];

    public function getData($id = false){
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}