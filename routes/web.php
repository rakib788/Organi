<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\Auth\LoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'backent'], function(){
Route::get('/',[LoginController::class, 'Showlogin'])->name('Login');
Route::post('/',[LoginController::class, 'loginProcces'])->name('login.procces');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');


Route:: get('dashboard', [DashboardController::class, 'showDashboard'])->name('admin.dashboard');
Route:: get('customers', [CustomerController::class, 'index']);
});