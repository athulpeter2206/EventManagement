<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\LoginController;
use  App\Http\Controllers\RegisterUserController;
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



Route::get('/bookEvent', [LoginController::class, 'loginCheck']);

Route::get('/home', function () {
    return view('EventViews/index');
});

Route::get('/bookEvent', function () {
    return view('EventViews/Login');
});

Route::get('/DashboardUser', function () {
    return view('EventViews/DashboardUser');
});

Route::get('/DashboardAdmin', function () {
    return view('EventViews/DashboardAdmin');
});

Route::get('/Register',function(){
    return view('EventViews/RegisterUser');
});

Route::get('/RegisterSuccess',function(){
    return view('EventViews/registerSuccess');
});

Route::post('loginUser',[LoginController::class,'loginCapture']);

Route::post('registerUser',[RegisterUserController::class,'registerUsertoDB']);

