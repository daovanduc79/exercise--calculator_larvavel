<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showFormCal()
    {
        return view('input');
    }

    public function calculator(Request $request)
    {
        $request['product-description'];
        $request['list-price'];
        $request['discount-percent'];
        $request['discount-amount'] = $request['list-price']*$request['discount-percent']/1000;
        $request['discount-price'] = $request['list-price']-$request['discount-amount'];
        return view('result');
    }
}
