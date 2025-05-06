<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\index_Controller;
use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrailsController;
use App\Http\Controllers\Tempat_ibadahController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\Trails_view;
use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\ProductController;


//Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function() {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });

});

Route::get('/trails', function () {
    return view('pages.home');
});

//Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//   return view('list_barang', compact('id', 'nama'));
//});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/Trails_view', [TrailsController::class, 'tampilkan']);
Route::get('Tempat_ibadahview', [Tempat_ibadahController::class, 'tampilkan']);
Route::get('Tempat_ibadahview', [index_Controller::class, 'tampilkan']);
Route::get('Trails_view', [TrailsController::class,  'tampilkan' ]);
Route::get('/Product', [ProductController::class, 'index']);