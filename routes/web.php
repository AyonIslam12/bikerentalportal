<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BikeController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Frontend\FrontBikeController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Frontend Site- Boom Bom Boom




Route::prefix('/')->name('kbr.')->group(function(){

    //Route::get('/kbr',[FrontController::class,'master'])->name('master');
    Route::get('/',[FrontController::class,'home'])->name('home');
    Route::get('/about',[FrontController::class,'about'])->name('about');
    Route::get('/contuctus',[FrontController::class,'contuctus'])->name('contuctus');
    Route::get('/terms',[FrontController::class,'terms'])->name('terms');


    Route::get('/bikes',[FrontBikeController::class,'bikes'])->name('bikes');
    Route::get('/bikes/singleview',[FrontBikeController::class,'singleview'])->name('bikes.singleview');

   //user routes
    Route::prefix('/user')->name('user.')->group(function(){
        Route::get('/registration',[UserController::class,'registration'])->name('registration');


    });

});













//Admin Routes
Route::get('/admin',[AdminController::class,'dashboard'])->name('admin.dashboard');

//Bike routes
Route::get('/admin/bike/list',[BikeController::class,'index'])->name('admin.bike.list');
Route::get('/admin/bike/create',[BikeController::class,'create'])->name('admin.bike.create');
Route::post('/admin/bike/store',[BikeController::class,'store'])->name('admin.bike.store');
Route::get('/admin/bike/show/{id}',[BikeController::class,'show'])->name('admin.bike.show');//bike view route
Route::get('/admin/bike/edit/{id}',[BikeController::class,'edit'])->name('admin.bike.edit');
Route::put('/admin/bike/update/{id}',[BikeController::class,'update'])->name('admin.bike.update');
Route::delete('/admin/bike/delete/{id}',[BikeController::class,'delete'])->name('admin.bike.delete');//bike delete route

