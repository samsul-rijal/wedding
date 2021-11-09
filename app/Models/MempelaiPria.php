<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MempelaiPria extends Model
{
    use HasFactory;
    protected $fillable = ['nama_lengkap','nama_panggilan','nama_bapak', 'putra','nama_ibu','gambar'];
    protected $table = 'mempelai_pria';
}
