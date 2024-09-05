<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   // public function index(){
   //     return 'Selamat Datang (dari controller)';
   // }
   public function index(){
    return view('Welcome');
   }
}
