<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * Class Product
 * @package App\Model
 * @property int $id
 * @property string $title
 * @property int $price_id
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property array $meta
 *
 * @property Price $price
 */
class Product extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'price_id',
        'meta',
    ];

    protected $casts = ['meta' => 'array'];

    protected $with = ['price'];

    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    public function clearMediaCollection(string $collectionName = 'default'): HasMedia
    {
        Media::where('collection_name', $collectionName)
            ->where('model_id', $this->id)
            ->where('model_type', self::class)
            ->delete()
        ;

        return $this;
    }
}
