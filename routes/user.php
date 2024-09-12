<?php

use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\UserLoginController;
use App\Http\Controllers\User\UserOrderController;
use App\Http\Controllers\User\UserReportController;
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

####################### USER ROUTE ##########################
Route::get('dashboard/user', function () {
    return view('dashboard.user.dashboard');
})->middleware(['auth'])->name('dashboard.user');


Route::post('login/user',[UserLoginController::class,'chickLogin'])->name('login.user');


Route::middleware(['auth:web'])->prefix('user')->group(function () {

    Route::get('logout',[UserLoginController::class,'logout'])->name('user.logout');

    // Route::get('home',[UserHomeController::class,'index'])->name('user.home');

    #############################################################################
    Route::get('orders',[UserOrderController::class, 'index'])->name('user.orders.index');
    Route::get('orders/create',[UserOrderController::class, 'create'])->name('user.orders.create');
    Route::post('orders/store',[UserOrderController::class, 'store'])->name('user.orders.store');
    // Route::get('orders/edit/{id}',[UserOrderController::class, 'edit'])->name('user.orders.edit');
    // Route::get('orders/delete/{id}',[UserOrderController::class, 'delete'])->name('user.orders.delete');
    // Route::post('orders/update/{id}',[UserOrderController::class, 'update'])->name('user.orders.update');
    Route::get('orders/update_status/{id}',[UserOrderController::class, 'update_status'])->name('user.orders.update_status');

    #############################################################################
    Route::get('report',[UserReportController::class,'index'])->name('user.report.index');
    Route::post('report/search',[UserReportController::class,'searchAjax'])->name('user.search_ajax');

});







