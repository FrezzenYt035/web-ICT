<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class website extends Model
{
    protected $table = 'website';

    protected $fillable = [
        'name',
        'url',
        'type',
    ];
    
}
