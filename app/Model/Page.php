<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Page
 * @package App\Model
 * @property string $title
 * @property string $slug
 * @property string $subtitle
 * @property string $content
 * @property array  $meta
 */
class Page extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'subtitle',
        'content',
        'meta',
    ];

    protected $casts = [
        'meta' => 'array'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
