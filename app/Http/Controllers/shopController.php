<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopController extends Controller
{
    public function shop (Request $request)
    {
        $items = \DB::table('Items')->get();

        return view('content.shop', ['items' => $items]);
    }
}
