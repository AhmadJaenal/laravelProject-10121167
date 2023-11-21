<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\NotFoundController;
use App\Http\Controllers\InterfaceController;
use Illuminate\Support\Facades\Route;

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
// LOGIN
Route::get('/', [AuthManager::class, 'login'])->name('login');
Route::post('actionlogin', [AuthManager::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [AuthManager::class, 'actionlogout'])->name('actionlogout');

//REGISTER
Route::get('register', [AuthManager::class, 'register'])->name('register');
Route::post('actionregister', [AuthManager::class, 'actionregister'])->name('actionregister');

//FORGOT PASSWORD
Route::get('forgot', [AuthManager::class, 'forgot'])->name('forgot');
Route::post('validateemail', [AuthManager::class, 'validateemail'])->name('validateemail');
Route::post('resetpassword', [AuthManager::class, 'resetpassword'])->name('resetpassword');

// 404 
Route::get('notfound', [NotFoundController::class, 'notfound'])->name('notfound');
Route::get('blankpage', [NotFoundController::class, 'blankpage'])->name('blankpage');

// INTERFACE
Route::get('viewDashboard', [InterfaceController::class, 'viewDashboard'])->name('viewDashboard');
Route::get('viewButtonPage', [InterfaceController::class, 'viewButtonPage'])->name('viewButtonPage');
Route::get('viewCardPage', [InterfaceController::class, 'viewCardPage'])->name('viewCardPage');
Route::get('viewColorPage', [InterfaceController::class, 'viewColorPage'])->name('viewColorPage');
Route::get('viewBorderPage', [InterfaceController::class, 'viewBorderPage'])->name('viewBorderPage');
Route::get('viewAnimationPage', [InterfaceController::class, 'viewAnimationPage'])->name('viewAnimationPage');
Route::get('viewOtherPage', [InterfaceController::class, 'viewOtherPage'])->name('viewOtherPage');
Route::get('viewChartPage', [InterfaceController::class, 'viewChartPage'])->name('viewChartPage');
Route::get('viewTablePage', [InterfaceController::class, 'viewTablePage'])->name('viewTablePage');
