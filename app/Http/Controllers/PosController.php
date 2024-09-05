<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{
    public function penjualan(){
        return view('SoalJS2.transaksi');
    }
}
