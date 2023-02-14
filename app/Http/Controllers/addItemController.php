<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addItemController extends Controller
{
    public function addItem(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],            // naam verlicht ingevuld, is een string max 255 Character 
            'description' => ['required', 'string', 'max:255'],     // naam description ingevuld, is een string max 255 Character 
            'price' => ['required', 'numeric', 'min:1'],            // price verlicht ingevuld, is een nummer ('numeric')
            'stock' => ['required', 'numeric', 'min:1'],            // stock verlicht ingevuld, is een nummer ('numeric')
        ]);
        $name = htmlspecialchars($request->input('name'));                      // naam, xss validatie ('htmlspecialchars'), vraagt input naam
        $description = htmlspecialchars($request->input('description'));        // description, xss validatie ('htmlspecialchars'), vraagt input naam
        $price = htmlspecialchars($request->input('price'));                    // price, xss validatie ('htmlspecialchars'), vraagt input naam
        $stock = htmlspecialchars($request->input('stock'));                    // stock, xss validatie ('htmlspecialchars'), vraagt input naam
        $currentTime = date('Y-m-d H:i:s');                                     // tijd van item aanmaak 
        $data = array('name'=>$name, "description"=>$description,"price"=>$price,"stock"=>$stock,"created_at"=>$currentTime);       // '$data' array met alle gegevens 
        \DB::table('Items')->insert($data);                     // array '$data' word aan db table Items toegevoegs 
        return redirect('addItem');                         
    }


}
