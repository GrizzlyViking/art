<?php

namespace Tests\Unit;

use App\Model\Basket;
use App\Model\Product;
use App\Model\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class BasketTest extends TestCase
{
    /** @test */
    public function creating_basket_assigns_authenticated_user()
    {
        $user = factory(User::class)->create();
        $this->be($user);

        $basket = factory(Basket::class)->create();
    }

    /** @test */
    public function put_something_in_basket()
    {
        /** @var Basket $basket */
        $basket = factory(Basket::class)->create()->each(function (Basket $basket) {
            $basket->user()->create(factory(User::class)->make());
        });
        $basket->items()->save(factory(Product::class)->make());



        $this->assertTrue(true);
    }
}
