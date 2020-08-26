<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'meta',
    ];

    protected $casts = [
        'meta' => 'array'
    ];
}
