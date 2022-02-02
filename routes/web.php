<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frant\HomeController;
use App\Http\Controllers\Frant\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\RestaurantController;
use App\Http\Controllers\Frant\MenuController;
use App\Http\Controllers\Frant\CartController;
use App\Http\Controllers\Frant\OrderController;
use App\Http\Controllers\Admin\Auth\About_usController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frant\PaymentController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
// -------------------------social login google------------------------
Route::get('login/google', [LoginController::class, 'redirectToProviderGoogle'])->name('google');
Route::get('login/google/callback', [LoginController::class, 'handleProviderCallbackGoogle']);
// -------------------------social login facebook------------------------
Route::get('login/facebook', [LoginController::class, 'redirectToProvider'])->name('facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleProviderCallback']);
// ------------------------------------------------
Route::get('/', [About_usController::class, 'index']);
// ----------------------------------Forgot Password-----------------------------
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPassword'])->name('show_forgot_password');
Route::post('send-otp-mail', [ForgotPasswordController::class, 'sendOtpMail'])->name('send_otp');

// ----------------------------------Forgot OTP----------------------------------
Route::get('otp', function () {
	return view('frant.send_otp_mail');
})->name('otp-page');

Route::get('changepass', function () {
	return view('frant.forgot_changepass');
})->name('changepassword');
Route::post('verify-otp', [ForgotPasswordController::class, 'verifyOtp'])->name('verify_otp');
Route::view('demo', 'demo');

// ----------------------------------Forgot Change Password----------------------------------
Route::post('forgot-change-password', [ForgotPasswordController::class, 'changePassword'])->name('forgot_changepass');

Route::group(['middleware' => 'auth:web'], function () {
	Route::get('/home', [App\Http\Controllers\Frant\HomeController::class, 'index'])->name('home');

	// -------------------------------------frant view-----------------------------------------------
	Route::view('master', 'frant.master');
	Route::view('model', 'model');
	Route::view('edit', 'edit');

	Route::get('testimonial', function () {
		return view('frant.testimonial');
	})->name('testimonial');

	Route::get('paymentpage', function () {
		return view('frant.payment');
	})->name('payment');

	Route::get('orderhistory', function () {
		return view('frant.orderhistory');
	})->name('orderhistory');

	Route::get('ordershistory', function () {
		return view('frant.order_history');
	})->name('ordershistory');

	Route::post('testimonial', [HomeController::class, 'testimonial'])->name('testimonials');

	// -------------------------------------------Restaurant--------------------------------------------------------
	Route::post('edit-user', [HomeController::class, 'update'])->name('edit-user');
Route::post('editpassword-user', [HomeController::class, 'changepassword'])->name('editpassword-user');
	Route::get('readmore', [HomeController::class, 'readmore'])->name('readmore');
	Route::view('change_password', 'frant.change_password')->name('change_password');

	//--------------------------------------menu------------------------------------------------
	Route::get('menu/{slug}', [MenuController::class, 'category'])->name('menu');
	Route::get('subcategory/{slug}', [MenuController::class, 'subCategory'])->name('subcategory');
	Route::get('food/{slug}', [MenuController::class, 'foodList'])->name('food');
	Route::resource('cart', CartController::class);
	Route::resource('order', OrderController::class);
	Route::get('showorder',[OrderController::class, 'showOrder'])->name('showorder');
	Route::get('showorderdetail/{id}',[OrderController::class, 'showOrderDetail'])->name('showorderdetail');
	Route::post('deleteorderhistory/{id}',[OrderController::class, 'deleteOrderHistory'])->name('deleteorderhistory');


	//-------------------------------------- Payment --------------------------------------------
	Route::post('paymentPage', [PaymentController::class, 'paymentPage'])->name('paymentpage');
});
