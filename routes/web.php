<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;

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

    // Route::get('login', [AuthController::class, 'index'])->name('login');
    // Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
    // Route::get('registration', [AuthController::class, 'registration'])->name('register');
    // Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
    // Route::get('dashboard', [AuthController::class, 'dashboard']); 
    // Route::get('logout', [AuthController::class, 'logout'])->name('logout');


    Route::get('login', [LoginController::class, 'login_index'])->name('login');
    Route::post('post-login', [LoginController::class, 'postLogin'])->name('login.post'); 

    Route::get('registration', [LoginController::class, 'registration'])->name('register');
    Route::post('post-registration', [LoginController::class, 'postRegistration'])->name('register.post'); 


    Route::get('/', [CustomerController::class, 'index'])->name('customer.home'); 
    Route::get('bank-manual', [CustomerController::class, 'bank_manual'])->name('customer.bank.manual'); 
    Route::get('lead-bank-manual', [CustomerController::class, 'lead_bank_manual'])->name('customer.lead.bank.manual'); 
    Route::get('upazila-manual', [CustomerController::class, 'upazila_manual'])->name('customer.upazila.manual'); 
    Route::get('install-element', [CustomerController::class, 'inatall_element'])->name('customer.install.element'); 
    Route::get('farmar-manual', [CustomerController::class, 'farmar_manual'])->name('customer.farmar.manual'); 
    Route::get('administarative-manual', [CustomerController::class, 'administrative_manual'])->name('customer.administrative.manual'); 
    

Route::group(['middleware'=>['sessionVerify']] , function(){
    Route::group(['middleware'=>['userType']] , function(){

        Route::get('customer-dashboard', [CustomerController::class, 'customer_dashboard'])->name('customer.dashboard');

    });
});