<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\InterfaceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Models\Transactions;
use Illuminate\Support\Facades\Route;

// NIM      : 10121167
// Nama     : Ahmad Jaenal Aripin
// Kelas    : IF-5

// LOGIN
Route::get('login', [AuthManager::class, 'login'])->name('login')->middleware('guest');
Route::post('actionlogin', [AuthManager::class, 'actionlogin'])->name('actionlogin');
Route::post('actionlogout', [AuthManager::class, 'actionlogout'])->name('actionlogout');

//REGISTER
Route::get('register', [AuthManager::class, 'register'])->name('register');
Route::post('actionregister', [AuthManager::class, 'actionregister'])->name('actionregister');

//FORGOT PASSWORD
Route::get('forgot', [AuthManager::class, 'forgot'])->name('forgot')->middleware('guest');
Route::get('validateemail', [AuthManager::class, 'validateemail'])->name('validateemail')->middleware('guest');
Route::post('resetpassword', [AuthManager::class, 'resetpassword'])->name('resetpassword')->middleware('guest');
Route::post('actionResetPassword', [AuthManager::class, 'actionResetPassword'])->name('actionResetPassword');

// // INTERFACE
Route::get('/', [InterfaceController::class, 'viewLandingPage'])->name('viewLandingPage');
Route::get('viewAboutPage', [InterfaceController::class, 'viewAboutPage'])->name('viewAboutPage');
Route::get('viewServicePage', [InterfaceController::class, 'viewServicePage'])->name('viewServicePage');
Route::get('viewBlogPage', [InterfaceController::class, 'viewBlogPage'])->name('viewBlogPage');
Route::get('viewContactPage', [InterfaceController::class, 'viewContactPage'])->name('viewContactPage');
Route::get('viewCheckoutPage/{id}', [InterfaceController::class, 'viewCheckoutPage'])->name('viewCheckoutPage')->middleware('auth');
Route::get('viewThankYouPage', [InterfaceController::class, 'viewThankYouPage'])->name('viewThankYouPage');

// PRODUCT
Route::get('viewShopPage', [ProductController::class, 'fetchData'])->name('viewShopPage');
Route::get('viewAddProduct', [InterfaceController::class, 'viewAddProduct'])->name('viewAddProduct');
Route::post('addNewProduct', [ProductController::class, 'addNewProduct'])->name('addNewProduct');
Route::get('deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');

// TRANSACTION
Route::get('viewDashboardTransaction', [InterfaceController::class, 'viewDashboardTransaction'])->name('viewDashboardTransaction');
Route::get('viewEditTransaction', [InterfaceController::class, 'viewEditTransaction'])->name('viewEditTransaction');
Route::get('viewTransactionPage/{id}', [InterfaceController::class, 'viewTransactionPage'])->name('viewTransactionPage');
Route::get('viewDetailTransaction', [TransactionController::class, 'viewDetailTransaction'])->name('viewDetailTransaction');

Route::post('createTransaction/{id}', [TransactionController::class, 'createTransaction'])->name('createTransaction');
Route::post('transactionChecking/{id}', [TransactionController::class, 'transactionChecking'])->name('transactionChecking');
Route::post('transactionSuccess/{id}', [TransactionController::class, 'transactionSuccess'])->name('transactionSuccess');
Route::post('transactionProcess/{id}', [TransactionController::class, 'transactionProcess'])->name('transactionProcess');
Route::post('updateTransaction/{id}', [TransactionController::class, 'updateTransaction'])->name('updateTransaction');
Route::get('deleteTransaction{id}', [TransactionController::class, 'deleteTransaction'])->name('deleteTransaction');
