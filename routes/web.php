<?php

use App\Http\Controllers\PaymentController;
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
    return view('welcome');
});

Route::get('payment',[PaymentController::class,'index'])->name('payment.index');
Route::get('status',[PaymentController::class,'status'])->name('payment.status');
Route::get('error',[PaymentController::class,'error'])->name('payment.error');
Route::get('pro',[PaymentController::class,'pro'])->name('payment.pro');