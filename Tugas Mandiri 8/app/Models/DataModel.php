<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'mhs';
    protected $allowedFields = ['id','nim', 'nama', 'alamat'];
}