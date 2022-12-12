<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ArtikelController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/artikel', function () {
    return view('artikel.index');
});

Route::get('/', [ProdukController::class, 'index'])->name("list");

Route::prefix("produk")->name('produk.')->controller(ProdukController::class)->group(function () {
    Route::get('/list', 'index')->name("list");
    Route::get('/detail/{id}', 'detail')->name("detail");
    Route::get('/store', 'store')->name("store");

    Route::post('/create', 'create')->name("create");
    Route::put('/update/{id}', 'update')->name("update");
    Route::get('/destroy/{id}', 'destroy')->name("destroy");
});

Route::prefix("artikel")->name('artikel.')->controller(ArtikelController::class)->group(function () {
    Route::get('/', 'index')->name("index");
    Route::get('/edit/{id}', 'edit')->name("edit");
    Route::get('/show/{id}', 'show')->name("show");
    Route::get('/store', 'store')->name("store");

    Route::post('/create', 'create')->name("create");
    Route::put('/update/{id}', 'update')->name("update");
    Route::get('/destroy/{id}', 'destroy')->name("destroy");
});
