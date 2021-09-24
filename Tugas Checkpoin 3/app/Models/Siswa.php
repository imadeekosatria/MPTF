<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['nama_siswa','kelas','no_hp','gender','alamat'];
}
