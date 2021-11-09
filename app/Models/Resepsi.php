<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resepsi extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal','jam_mulai','jam_selesai','tempat','maps'];
    protected $table = 'resepsi';
}
