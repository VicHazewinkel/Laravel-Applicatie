<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verkoop;

class overviewController extends Controller
{
public function overview (Request $request)
    {
        $verkopen = Verkoop::all();                             
        return view('admin.overview', compact('verkopen'));     // stuurt alle items verkochte items door naar admin.overview
                                                                // (met hulp van model)
    }

}
