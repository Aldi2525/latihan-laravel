<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;

class PembeliController extends Controller
{
    //
     public function pembeli()
    {
        $data = Pembeli::all();
        return view('pembeli', compact('data'));
    }
}
