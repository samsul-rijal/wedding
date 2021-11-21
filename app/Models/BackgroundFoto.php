<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackgroundFoto extends Model
{
    use HasFactory;
    protected $fillable = ['gambar'];
    protected $table = 'background_foto';
}
