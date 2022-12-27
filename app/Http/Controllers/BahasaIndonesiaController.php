<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bahasa_indonesia;

class BahasaIndonesiaController extends Controller
{
    //
    public function index()
    {
        # code...
        $bind = bahasa_indonesia::all();
        return view('resID', ['AllBID' => $bind]);
    }
}
