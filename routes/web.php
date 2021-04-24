<?php

use App\Http\Controllers\BasicCurd;
use Illuminate\Support\Facades\Route;

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

Route::get('/','BasicCurd@OnSelect');
Route::get('/insert',function(){
    return view('insert');
});

Route::get('/delete',function(){
    return view('delete');
});
Route::get('/update',function(){
    return view('update');
});
Route::post('/InsertData','BasicCurd@OnInsert');
Route::post('/DeleteData','BasicCurd@OnDelete');
Route::post('/UpdatetData','BasicCurd@OnUpdate');


// Route::get('/update');
