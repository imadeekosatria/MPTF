<?php

namespace App\Models;

use CodeIgniter\Model;

class ResepModel extends Model
{
    protected $table = 'resep';
    protected $allowedFields = ['judul', 'alat', 'petunjuk','kategori'];
    protected $db;
    public function __construct(){
        $this->db = db_connect();
    }

    //Get List Carousel Headline
    public function getHead(){
        $query = $this->db->query("SELECT * FROM `resep` ORDER BY `time`  DESC LIMIT 3;");
        
        return $query;
    }

    public function isFirst(){
        $first = $this->db->query("SELECT * FROM `resep` ORDER BY `time` DESC LIMIT 1;");
        return $first;
    }   

    //Get List Makanan
    public function getMakanan(){
        $query = $this->db->query("SELECT * FROM `resep` WHERE kategori='makanan' ORDER BY time DESC LIMIT 4;");
        return $query;
    }

    public function getFullMakanan(){
        $query = $this->db->query("SELECT * FROM `resep` WHERE kategori='makanan' ORDER BY time DESC;");
        return $query;
    }

    //Get List Minuman
    public function getMinuman(){
        $query = $this->db->query("SELECT * FROM `resep` WHERE kategori='minuman' ORDER BY time DESC LIMIT 4;");
        return $query;
    }

    public function getFullMinuman(){
        $query = $this->db->query("SELECT * FROM `resep` WHERE kategori='minuman' ORDER BY time DESC;");
        return $query;
    }

    public function getData($id = false){
        $query = $this->db->query("SELECT * FROM `resep` WHERE id = $id;");
        return $query;
    }
}
    