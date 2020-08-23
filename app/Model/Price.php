<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Price
 * @package App\Model
 * @property int $id
 * @property string $currency_code
 * @property float $amount
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Price extends Model
{
    protected $fillable = [
        'currency_code',
        'amount',
    ];
}
