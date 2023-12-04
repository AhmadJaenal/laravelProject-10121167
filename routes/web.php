<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\InterfaceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

// LOGIN
Route::get('login', [AuthManager::class, 'login'])->name('login')->middleware('guest');
Route::post('actionlogin', [AuthManager::class, 'actionlogin'])->name('actionlogin');
Route::post('actionlogout', [AuthManager::class, 'actionlogout'])->name('actionlogout');

//REGISTER
Route::get('register', [AuthManager::class, 'register'])->name('register');
Route::post('actionregister', [AuthManager::class, 'actionregister'])->name('actionregister');

//FORGOT PASSWORD
Route::get('forgot', [AuthManager::class, 'forgot'])->name('forgot');
Route::get('validateemail', [AuthManager::class, 'validateemail'])->name('validateemail');
Route::post('resetpassword', [AuthManager::class, 'resetpassword'])->name('resetpassword');
Route::post('actionResetPassword', [AuthManager::class, 'actionResetPassword'])->name('actionResetPassword');

// // INTERFACE
Route::get('/', [InterfaceController::class, 'viewLandingPage'])->name('viewLandingPage');
Route::get('viewAboutPage', [InterfaceController::class, 'viewAboutPage'])->name('viewAboutPage');
Route::get('viewServicePage', [InterfaceController::class, 'viewServicePage'])->name('viewServicePage');
Route::get('viewBlogPage', [InterfaceController::class, 'viewBlogPage'])->name('viewBlogPage');
Route::get('viewContactPage', [InterfaceController::class, 'viewContactPage'])->name('viewContactPage');
Route::get('viewCheckoutPage/{id}', [InterfaceController::class, 'viewCheckoutPage'])->name('viewCheckoutPage')->middleware('auth');
Route::get('viewCartPage/{id}', [InterfaceController::class, 'viewCartPage'])->name('viewCartPage');
Route::get('viewThankYouPage', [InterfaceController::class, 'viewThankYouPage'])->name('viewThankYouPage');

// PRODUCT
Route::get('viewShopPage', [ProductController::class, 'fetchData'])->name('viewShopPage');

// TRANSACTION
Route::post('createTransaction/{id}', [TransactionController::class, 'createTransaction'])->name('createTransaction');
