<?php


namespace App\Http\View\Composers;

use App\Model\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendComposer
{
    /** @var Basket */
    protected $basket;

    public function __construct(Request $request)
    {
        if (Auth::guest()) {
            $basket = Basket::updateOrCreate([
                'session_id' => $request->session()->getId()
            ], [
                'session_id' => $request->session()->getId()
            ]);
        }
    }
}
