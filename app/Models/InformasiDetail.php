<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class informasi extends Model
{
    protected $table = 'informasi';
    protected $fillable = ['id','judul', 'deskripsi', 'gambar'];
}
