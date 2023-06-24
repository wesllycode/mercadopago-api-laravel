<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment');
    }

    public function status()
    {
        return view('status');
    }

    public function pro()
    {
        return view ('pro');
    }

    public function error(Request $request)
    {
       dd($request->all());
    }

    public function bricks()
    {
        return view('bricks');
    }
}
