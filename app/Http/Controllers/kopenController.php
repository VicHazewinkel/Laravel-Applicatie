<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class kopenController extends Controller
{
    public function store (Request $request)
    {
        $user_id = auth()->id();
        $item_id = $request->input('item_id');
        $item = \DB::table('items')->where('id', $item_id)->first();
        $data = \DB::table('users')->where('id', Auth::id())->first();
        if($data->saldo >= $item->price) {
            $newSaldo = $data->saldo - $item->price;
            \DB::table('Users')->where('id', Auth::id())->update(['saldo' => $newSaldo]);
            $data = array('user_id' => $user_id, 'item_id' => $item_id);
            \DB::table('verkoop')->insert($data);
        }
        else {
            return redirect()->action([shopController::class, 'shop'])->withErrors('Soldo is te ontoereikend');
        }
        //var_dump($request);
        //return redirect('/shop');
        return redirect()->action([shopController::class, 'shop']);
    }
}
