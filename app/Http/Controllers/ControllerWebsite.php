<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerWebsite extends Controller
{
    public function daftar()
    {   $data = \App\Models\Website::all();
        dd($data);

        return view('beranda.daftar', compact('data'));
    }
}
