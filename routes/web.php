<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

/*Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function(){
    return 'World';
});

/*Route::get('/', function(){
    return 'Selamat Datang';
});*/

/*Route::get('/', [PageController::class,'index']);*/

/*Route::get('/', [HomeController::class,'index']);

/*Route::get('/about', function(){
    return '2241760017 Dyah Nanda Ayu Purnamayansyah';
});*/

/*Route::get('/about', [PageController::class,'about']);*/

/*Route::get('/about', [AboutController::class,'about']);

Route::get('/user/{name}', function($name){
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

/*Route::get('/articles/{id}', function($id){
    return 'Halaman artikel dengan ID: '.$id;
});*/

/*Route::get('/articles/{id}', [PageController::class,'articles']);*/

/*Route::get('/articles/{id}', [ArticleController::class,'articles']);

Route::get('/user/{name?}', function($name='John'){
    return 'Nama saya  '.$name;
});

//Route::resource('photos', PhotoController::class);

//Route::resource('photos', PhotoController::class)->only([
 //   'index', 'show'
//]);
    
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// Route::get('/greeting', function (){
//    return view('blog.hello', ['name' => 'Dyah']);
// });

Route::get('/greeting', [WelcomeController::class,'greeting']);
*/

// Soal JS 2

Route::get('/', [HomeController::class,'index']);

Route::get('/category', [CategoryController::class,'homeCategory']);
Route::get('/category/food-beverage', [CategoryController::class,'foodCategory']);
Route::get('/category/beauty-health', [CategoryController::class,'beautyCategory']);
Route::get('/category/home-care', [CategoryController::class,'careCategory']);
Route::get('/category/baby-kid', [CategoryController::class,'babyCategory']);

Route::get('/user', [UserController::class,'user']);
Route::get('/penjualan', [PosController::class,'penjualan']);
