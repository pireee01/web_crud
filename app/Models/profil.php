<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;
    protected $fillable = ['nama_lengkap','no_handphone','alamat','pendidikan','jurusan'];
    protected $table = 'profil';
    public $timestamps = false;
}
