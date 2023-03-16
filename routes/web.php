<?php

use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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
    return view('shop.index');
});



Route::prefix('/catalogs')->controller(CatalogController::class)->group(function () {
    Route::get('/', 'index')->name('catalogs.index');
    Route::get('/{slug}', 'detais')->name('catalogs.details');
    Route::get('/filter/{slug}', 'filter')->name('catalogs.filter');
});

Route::get('/payment-delivery', function () {
    return view('shop.payment-delivery');
});

Route::get('/return-policy', function () {
    return view('shop.return-policy');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
