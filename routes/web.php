<?php

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

Route::get('/', function () {

    $data = config('paste');

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach ($data as $key => $pasta) {
        $pasta['id'] = $key;
        if ( $pasta["tipo"] == "lunga" ) {
            $lunghe[] = $pasta;
        } elseif ( $pasta["tipo"] == "corta" ) {
            $corte[] = $pasta;
        } else if ( $pasta["tipo"] == "cortissima" ) {
            $cortissime[] = $pasta;
        }
    }

    return view('home', [
        "corte" => $corte,
        "lunghe" => $lunghe,
        "cortissime" => $cortissime
    ]);
})->name("homepage");

Route::get("/ultime-notizie", function() {
    return view("news");
})->name("news");

Route::get("prodotti/{id}", function ($id) {

    $data = config('paste');
    $pasta = $data[$id];

    return view("prodotti", [
        'pasta' => $pasta
    ]);
})->where('id', '[0-9]+')->name("prodotti");