<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function homeCategory(){
        return view('SoalJS2.category');
    }
    public function foodCategory(){
        return view('SoalJS2.food');
    }
    public function beautyCategory(){
        return view('SoalJS2.beauty');
    }
    public function careCategory(){
        return view('SoalJS2.care');
    }
    public function babyCategory(){
        return view('SoalJS2.baby');
    }
}

