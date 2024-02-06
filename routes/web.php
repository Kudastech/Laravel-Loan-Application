<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserDashboardController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', [AdminController::class, 'admindashboard']);

Route::get('/show_user', [AdminController::class, 'show_user']);

Route::get('/delivered/{id}', [AdminController::class, 'delivered']);



// This is Home Controller

Route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth');

Route::get('/userdashboard', [HomeController::class, 'userdashboard'])->name('userdashboard.index');

Route::get('/', [HomeController::class, 'index']);

Route::get('/newrequest', [UserDashboardController::class, 'newrequest'])->name('userdashboard.newrequest');

Route::post('/submit_newrequest', [UserDashboardController::class, 'submit_newrequest'])->name('userdashboard.submit_newrequest');

Route::get('/loanstatus', [UserDashboardController::class, 'loanstatus'])->name('userdashboard.loanstatus');

Route::get('/repayment', [UserDashboardController::class, 'repayment'])->name('userdashboard.repayment');

Route::get('/getform', [PaymentController::class, 'show' ])->name('form');

Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');

Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);


Route::get('/about', [HomeController::class, 'about']);

Route::get('/contact', [HomeController::class, 'contact']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});





