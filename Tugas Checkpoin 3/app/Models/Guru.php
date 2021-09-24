<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $primarykey = 'id_guru';
    public $timestamps = false;
    protected $fillable = ['nama_guru','nip','mapel','no_hp','gender','alamat'];
}
