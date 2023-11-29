<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\NotFoundController;
use App\Http\Controllers\InterfaceController;
use Illuminate\Support\Facades\Route;

// LOGIN
Route::get('login', [AuthManager::class, 'login'])->name('login');
Route::post('actionlogin', [AuthManager::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [AuthManager::class, 'actionlogout'])->name('actionlogout');

//REGISTER
Route::get('register', [AuthManager::class, 'register'])->name('register');
Route::post('actionregister', [AuthManager::class, 'actionregister'])->name('actionregister');

//FORGOT PASSWORD
Route::get('forgot', [AuthManager::class, 'forgot'])->name('forgot');
Route::get('validateemail', [AuthManager::class, 'validateemail'])->name('validateemail');
Route::post('resetpassword', [AuthManager::class, 'resetpassword'])->name('resetpassword');
Route::post('actionResetPassword', [AuthManager::class, 'actionResetPassword'])->name('actionResetPassword');

// INTERFACE
Route::get('/', [InterfaceController::class, 'viewLandingPage'])->name('viewLandingPage');
Route::get('viewDashboard', [InterfaceController::class, 'viewDashboard'])->name('viewDashboard');
Route::get('viewShopPage', [InterfaceController::class, 'viewShopPage'])->name('viewShopPage');
Route::get('viewAboutPage', [InterfaceController::class, 'viewAboutPage'])->name('viewAboutPage');
Route::get('viewServicePage', [InterfaceController::class, 'viewServicePage'])->name('viewServicePage');
Route::get('viewBlogPage', [InterfaceController::class, 'viewBlogPage'])->name('viewBlogPage');
Route::get('viewContactPage', [InterfaceController::class, 'viewContactPage'])->name('viewContactPage');
Route::get('viewCheckoutPage', [InterfaceController::class, 'viewCheckoutPage'])->name('viewCheckoutPage');
Route::get('viewCartPage', [InterfaceController::class, 'viewCartPage'])->name('viewCartPage');
Route::get('viewThankYouPage', [InterfaceController::class, 'viewThankYouPage'])->name('viewThankYouPage');
