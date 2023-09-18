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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', function(){
    return view ('home');
});

Route::get('/pagina1', function(){
    echo "Testando página 1";
});

Route::get('/pagina2', function(){
    echo "Testando página 2";
});

//Route::view('/', 'pagina3');
