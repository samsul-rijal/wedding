<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MempelaiWanita extends Model
{
    use HasFactory;
    protected $fillable = ['nama_lengkap','nama_panggilan','nama_bapak', 'putri','nama_ibu','gambar'];
    protected $table = 'mempelai_wanita';
}
