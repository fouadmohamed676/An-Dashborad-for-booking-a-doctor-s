<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\BannerController; 
use App\Http\Controllers\PatientController; 
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StatusController;

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
    return redirect()->route('login');
});

####################### ADMIN ROUTE ##########################
Route::get('dashboard/admin', function () {
    return view('dashboard.admin.dashboard');
})->middleware(['auth:admin'])->name('dashboard.admin');

Route::get('login',[LoginController::class,'showLoginView'])->name('login');
Route::post('login/admin',[LoginController::class,'checkLogin'])->name('login.admin');

####################### User ROUTE ###############################

Route::middleware(['auth:web'])->group(function () {
Route::get('home/user',[HomeController::class,'indexUser'])->name('home.user');
Route::get('/user/orders/index',[OrderController::class, 'indexUser'])->name('order.user.index'); 
Route::get('/order/update/{id}', [OrderController::class, 'update'])->name('order.update');
Route::put('/order/save_update/{id}', [OrderController::class, 'edit'])->name('order.edit');
Route::get('order/delete/{id}',[OrderController::class, 'delete'])->name('order.delete');
Route::post('order/update_status/{id}',[OrderController::class, 'update_status'])->name('order.update_status');
});

#######################End  User ROUTE #############################


####################### ADMIN ROUTE #############################

Route::middleware(['auth:admin'])->group(function () {


    Route::get('logout',[LoginController::class,'logout'])->name('logout');
    Route::get('home',[HomeController::class,'index'])->name('home');


    Route::post('/admin/order/update_status/{id}',[OrderController::class, 'update_statusAdmin'])->name('orders.update_status');
    Route::get('/admin/orders/update/{id}', [OrderController::class, 'updateAdmin'])->name('orders.update');
    Route::put('/admin/orders/save_update/{id}', [OrderController::class, 'editAdmin'])->name('orders.edit');
    Route::get('/admin/orders/index',[OrderController::class, 'indexAdmin'])->name('orders.index'); 
    Route::get('/admin/orders/delete/{id}',[OrderController::class, 'deleteAdmin'])->name('orders.delete');
    Route::get('/admin/orders/restore/{id}',[OrderController::class, 'restoreAdmin'])->name('orders.restore');
    Route::get('/admin/orders/destroy/{id}',[OrderController::class, 'destroyAdmin'])->name('orders.destroy');
     

    #############################################################################

    Route::get('users',[UserController::class, 'index'])->name('users.index');
    Route::get('users/create',[UserController::class, 'create'])->name('users.create');
    Route::post('users/store',[UserController::class, 'store'])->name('users.store');
    Route::get('users/edit/{id}',[UserController::class, 'edit'])->name('users.edit');
    Route::get('users/delete/{id}',[UserController::class, 'delete'])->name('users.delete');
    Route::post('users/update/{id}',[UserController::class, 'update'])->name('users.update');
    Route::post('users/update_password/{id}',[UserController::class, 'update_password'])->name('users.update_password');

    #############################################################################
    
    Route::get('status/show',[StatusController::class, 'show'])->name('status.index');
    Route::get('status/create',[StatusController::class, 'create'])->name('status.create');
    Route::post('status/store',[StatusController::class, 'save'])->name('status.store');
    Route::get('status/edit/{id}',[StatusController::class, 'edit'])->name('status.edit');
    Route::get('status/delete/{id}',[StatusController::class, 'destroy'])->name('status.delete');
    Route::post('status/update/{id}',[StatusController::class, 'edit'])->name('status.update');    
    
    #############################################################################

    Route::get('patient/show',[PatientController::class, 'show'])->name('patient.index');
    Route::get('patient/create',[PatientController::class, 'create'])->name('patient.create');
    Route::post('patient/store',[PatientController::class, 'save'])->name('patient.store');
    Route::get('patient/edit/{id}',[PatientController::class, 'edit'])->name('patient.edit');
    Route::get('patient/delete/{id}',[PatientController::class, 'destroy'])->name('patient.delete');
    Route::get('patient/destroy/{id}',[PatientController::class, 'destroy'])->name('patient.destroy');
    Route::get('patient/restore/{id}',[PatientController::class, 'restore'])->name('patient.restore');
    Route::get('patient/logs/{id}',[PatientController::class, 'logs'])->name('patient.logs');
    Route::post('patient/update/{id}',[PatientController::class, 'edit'])->name('patient.update');

    #############################################################################
   
    Route::get('service/show',[ServiceController::class, 'show'])->name('service.show');
    Route::get('service/index',[ServiceController::class, 'index'])->name('service.index');
    Route::get('service/create',[ServiceController::class, 'create'])->name('service.create');
    Route::post('service/store',[ServiceController::class, 'save'])->name('service.store');
    Route::get('service/edit/{id}',[ServiceController::class, 'edit'])->name('service.edit');
    Route::get('service/destroy/{id}',[ServiceController::class, 'destroy'])->name('service.destroy');
    Route::get('service/restore/{id}',[ServiceController::class, 'restore'])->name('service.restore');
    Route::post('service/update/{id}',[ServiceController::class, 'edit'])->name('service.update');
   
    Route::get('banner/show',[BannerController::class, 'show'])->name('banner.show');
    Route::get('banner/index',[BannerController::class, 'index'])->name('banner.index');
    Route::get('banner/create',[BannerController::class, 'create'])->name('banner.create');
    Route::post('banner/store',[BannerController::class, 'save'])->name('banner.store');
    Route::get('banner/edit/{id}',[BannerController::class, 'edit'])->name('banner.edit');
    Route::get('banner/destroy/{id}',[BannerController::class, 'destroy'])->name('banner.destroy');
    Route::get('banner/restore/{id}',[BannerController::class, 'restore'])->name('banner.restore');
    Route::post('banner/update/{id}',[BannerController::class, 'edit'])->name('banner.update');

    
});

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Routinized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Routinized class loader</h1>';
});

//dump-autoload  class loader:
Route::get('/dump', function() {
    $exitCode = Artisan::call('dump-autoload');
    return '<h1>dump-autoload successfully</h1>';
});


