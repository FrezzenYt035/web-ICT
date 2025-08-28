<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class team extends Model
{
    use Sluggable;
    protected $table = 'team';
    protected $fillable = [
     'name',
     'position',
     'no_WA',
     'image',
     'bio',
     'slug'
    ];
            public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
