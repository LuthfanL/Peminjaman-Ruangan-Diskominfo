<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class custStatusBookingRuanganController extends Controller
{
    public function index(Request $request)
    {
        return view('custStatusBookingRuangan');
    }
}
