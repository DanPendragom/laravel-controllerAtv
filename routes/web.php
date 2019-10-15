<?php

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
    return view('welcome');
});


Route::group(['prefix'=>'primeiroexercicio'], function(){
    
    Route::get('/', function () {
        return view('imc');
    });
    
    Route::get('/calculo','Controller@calculaimc');
});

Route::group(['prefix'=>'segundoexercicio'], function(){
    
    Route::get('/', function () {
        return view('calc');
    });
    
    Route::get('/calculo2','Controller@calculanumbers');
});