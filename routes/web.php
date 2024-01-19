<?php

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

Route::get('/', function () {
//    return view('welcome');
return 'Hi';
});
Route::get('test',function (){
    return 'HaHAAH';
});
Route::get('test/hihi',function (){
    return 'HaHAH';
});
Route::get('test/{krim}',function ($krim){
   return $krim.'hahaaa';
});
