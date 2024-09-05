<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return view('SoalJS2.user')
        ->with('id', '07')
        ->with('nama', 'Dyah Nanda Ayu P');
    }
}
