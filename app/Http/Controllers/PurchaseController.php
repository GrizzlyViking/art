<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function basket(Request $request)
    {
        $request->validate([
            'artId' => 'int|exists:products,id'
        ]);




        dd();
    }
}
