<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class skuController extends Controller
{
    //

    public function index()
    {
        return view('sku')->with('page', 'sku');
    }
}
