<?php

namespace App\Http\Controllers;

use App\Models\bahasa_indonesia;
use App\Models\bahasa_osing;
use Illuminate\Http\Request;

// dd($bahasa_indonesia);
//aatach detach

class BahasaController extends Controller
{
    public function proses()
    {
        $status = 'kosong';
        return view('bahasa_indonesia', ['status' => $status]);
    }

    public function index(Request $request)
    {
        $bahasa = $request->bahasa;
        $keyword = $request->keyword;
        // $status = $request->status;
        $status = 'status';

        if ($bahasa == 'b_ind') {
            $translate = bahasa_indonesia::with('bahasa_osing')
                ->where('kata_ind', 'LIKE', '%' . $keyword . '%')
                ->get();
            return view('bahasa_indonesia', ['translate' => $translate, 'bahasa' => $bahasa, 'status' => $status]);
            // return view('bahasa_indonesia', ['translate' => $translate], ['bahasa' => $bahasa], compact('status'));
        } else {
            $translate = bahasa_osing::with('bahasa_indonesia')
                ->where('kata_os', 'LIKE', '%' . $keyword . '%')
                ->get();
            // dd($status);
            return view('bahasa_indonesia', ['translate' => $translate, 'bahasa' => $bahasa, 'status' => $status]);
        }
    }
}
