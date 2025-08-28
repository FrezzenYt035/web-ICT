<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tentang_kami extends Model
{
    protected $table = 'tentang_kami';
    protected $fillable = ['id',
     'judul',
     'deskripsi',
     'image',
     'is_active'
    ];



}

