<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('/home',[AdminController::class,'index']);
route::get('/category_page',[AdminController::class,'category_page']);
route::post('/add_category',[AdminController::class,'add_category']);
route::get('/cat_delete/{id}',[AdminController::class,'cat_delete']);
route::get('/edit_category/{id}',[AdminController::class,'edit_category']);
route::post('/update_category/{id}',[AdminController::class,'update_category']);
