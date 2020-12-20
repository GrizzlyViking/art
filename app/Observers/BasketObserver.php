<?php

namespace App\Observers;

use App\Model\Basket;
use App\Model\User;
use Illuminate\Support\Facades\Auth;

class BasketObserver
{
    /**
     * Handle the basket "created" event.
     *
     * @param Basket $basket
     * @return void
     */
    public function created(Basket $basket)
    {
        if (!Auth::guest() && !$basket->user instanceof User) {
            $basket->update([
                'user_id' => Auth::user()->id
            ]);
        }
    }

    /**
     * Handle the basket "updated" event.
     *
     * @param Basket $basket
     * @return void
     */
    public function updated(Basket $basket)
    {
        if (!Auth::guest() && !$basket->user instanceof User) {
            $basket->update([
                'user_id' => Auth::user()->id
            ]);
        }
    }
}
