<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/hakkimizda', function () {
    return view('hakkimizda');
});

Route::get('/iletisim',function (){
    return view('iletisim');
});

Route::get('/blog',function (){
    return view('blog');
});


Route::get('/blog-detail',function (){
    return view('blog-detail');
});
