<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CustomerController;


Route::get('/', function () {
    return view('welcome');
});
Route:: get('dashboard', [DashboardController::class, 'showDashboard']);
Route:: get('customers', [CustomerController::class, 'index']);