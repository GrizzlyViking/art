<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class Basket
 * @package App\Model
 *
 * @property int $id
 * @property string $session_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property User $user
 * @property Collection $items
 */
class Basket extends Model
{
    protected $table = 'basket';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->belongsToMany(Product::class, 'basket_items');
    }
}
