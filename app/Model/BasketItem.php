<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BasketItem
 * @package App\Model
 *
 * @property int $id
 * @property string $currency
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Basket $basket
 * @property Product $product
 */
class BasketItem extends Model
{
    protected $table = 'basket_items';
}
