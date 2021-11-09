<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriFoto extends Model
{
    use HasFactory;
    protected $fillable = ['keterangan','gambar'];
    protected $table = 'galeri_foto';
}
