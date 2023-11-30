<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\InterfaceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

// LOGIN
Route::get('/', [AuthManager::class, 'login'])->name('login')->middleware('guest');
Route::post('actionlogin', [AuthManager::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [AuthManager::class, 'actionlogout'])->name('actionlogout');

//REGISTER
Route::get('register', [AuthManager::class, 'register'])->name('register')->middleware('guest');
Route::post('actionregister', [AuthManager::class, 'actionregister'])->name('actionregister');

//FORGOT PASSWORD
Route::get('forgot', [AuthManager::class, 'forgot'])->name('forgot');
Route::get('validateemail', [AuthManager::class, 'validateemail'])->name('validateemail');
Route::post('resetpassword', [AuthManager::class, 'resetpassword'])->name('resetpassword');
Route::post('actionResetPassword', [AuthManager::class, 'actionResetPassword'])->name('actionResetPassword');

// INTERFACE
Route::get('viewLandingPage', [InterfaceController::class, 'viewLandingPage'])->name('viewLandingPage');
Route::get('viewShopPage', [InterfaceController::class, 'viewShopPage'])->name('viewShopPage');
Route::get('viewAboutPage', [InterfaceController::class, 'viewAboutPage'])->name('viewAboutPage');
Route::get('viewServicePage', [InterfaceController::class, 'viewServicePage'])->name('viewServicePage');
Route::get('viewBlogPage', [InterfaceController::class, 'viewBlogPage'])->name('viewBlogPage');
Route::get('viewContactPage', [InterfaceController::class, 'viewContactPage'])->name('viewContactPage');
Route::get('viewCheckoutPage', [InterfaceController::class, 'viewCheckoutPage'])->name('viewCheckoutPage');
Route::get('viewCartPage', [InterfaceController::class, 'viewCartPage'])->name('viewCartPage');
Route::get('viewThankYouPage', [InterfaceController::class, 'viewThankYouPage'])->name('viewThankYouPage');

// PRODUCT
Route::get('/shoppage', [ProductController::class, 'fetchData'])->name('fetchData');


// TRANSACTION
Route::post('createTransaction', [TransactionController::class, 'createTransaction'])->name('createTransaction');
