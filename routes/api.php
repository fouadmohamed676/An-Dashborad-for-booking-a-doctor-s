<?php

use App\Http\Controllers\ApiController\PatientController; 
use Illuminate\Support\Facades\Route; 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
 


//dump-autoload  class loader:
Route::get('dump', function() {
    // $exitCode = Artisan::call('dump-autoload');
    return '<h1>dump-autoload successfully</h1>';
});
 

Route::post('patient/login',[PatientController::class, 'loginPatient'])->name('patient.login');
Route::post('patient/register',[PatientController::class, 'register'])->name('patient.register');
Route::post('order/store',[PatientController::class, 'storeOrder'])->name('order.store');
Route::get('user/index',[PatientController::class, 'index'])->name('user.save');
Route::get('service/{id}',[PatientController::class, 'serviceUser'])->name('service.user');
Route::get('user/data/{id}',[PatientController::class, 'userData'])->name('user.data');
Route::get('order/last/{id}',[PatientController::class, 'lastOrder'])->name('order.last');
Route::get('order/getService/{id}',[PatientController::class, 'getService'])->name('order.getService');
Route::get('services',[PatientController::class, 'servicesIndex'])->name('service.index'); 
Route::get('banners',[PatientController::class, 'banners'])->name('banners.banners'); 

