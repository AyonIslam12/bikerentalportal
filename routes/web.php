<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BikeController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\InsuranceController;
use App\Http\Controllers\Backend\UserController as BackendUserController;
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

//bike
    Route::get('/our-bikes',[FrontBikeController::class,'bikes'])->name('bikes');
    Route::get('/bikes/singleview/{id}',[FrontBikeController::class,'singleview'])->name('bikes.singleview');

   //user routes
    Route::prefix('/user')->name('user.')->group(function(){
        Route::get('/registration',[UserController::class,'registration'])->name('registration');


    });

});













//Admin Routes

Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::post('/admin/do-login',[AdminController::class,'Dologin'])->name('admin.Dologin');


Route::group(['middleware' => 'admin-auth'],function () {
    Route::get('/admin',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');

//Bike routes
Route::get('/admin/bike/list',[BikeController::class,'index'])->name('admin.bike.list');
Route::get('/admin/bike/create',[BikeController::class,'create'])->name('admin.bike.create');
Route::post('/admin/bike/store',[BikeController::class,'store'])->name('admin.bike.store');
Route::get('/admin/bike/show/{id}',[BikeController::class,'show'])->name('admin.bike.show');//bike view route
Route::get('/admin/bike/edit/{id}',[BikeController::class,'edit'])->name('admin.bike.edit');
Route::put('/admin/bike/update/{id}',[BikeController::class,'update'])->name('admin.bike.update');
Route::delete('/admin/bike/delete/{id}',[BikeController::class,'delete'])->name('admin.bike.delete');//bike delete route
 //Customer Manage Route Group

Route::get('admin/user/lists',[BackendUserController::class,'index'])->name('admin.user.list');
Route::post('admin/user/create',[BackendUserController::class,'createCustomer'])->name('admin.user.create');
    Route::get('admin/user/show/{id}',[BackendUserController::class,'show'])->name('admin.user.show');
    Route::get('admin/user/edit/{id}',[BackendUserController::class,'editCustomer'])->name('admin.user.edit');
Route::put('admin/user/update/{id}',[BackendUserController::class,'updateCustomer'])->name('admin.user.update');
Route::get('admin/user/delete/{id}',[BackendUserController::class,'delete'])->name('admin.user.delete');

//Insurance Routes
Route::get('/admin/insurance/lists',[InsuranceController::class,'index'])->name('admin.insurance.list');
 Route::get('insurance/create',[InsuranceController::class,'create'])->name('admin.insurance.create');
Route::post('/admin/insurance/store',[InsuranceController::class,'store'])->name('admin.insurance.store');
Route::get('/admin/insurance/show/{id}',[InsuranceController::class,'show'])->name('admin.insurance.show');
 Route::get('/admin/insurance/edit/{id}',[InsuranceController::class,'edit'])->name('admin.insurance.edit');
Route::put('/admin/insurance/update/{id}',[InsuranceController::class,'update'])->name('admin.insurance.update');
Route::get('/admin/insurance/delete/{id}',[InsuranceController::class,'delete'])->name('admin.insurance.delete');



});



