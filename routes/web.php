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

// Route::get('/', function () {
//     return view('layouts.main');
// });


// LOGIN
Route::get('/', [AuthManager::class, 'login'])->name('login');
Route::post('actionlogin', [AuthManager::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [AuthManager::class, 'actionlogout'])->name('actionlogout');
Route::get('forgot', [AuthManager::class, 'forgot'])->name('forgot');

//REGISTER
Route::get('register', [AuthManager::class, 'register'])->name('register');
Route::post('register/action', [AuthManager::class, 'actionregister'])->name('actionregister');

// 404 
Route::get('notfound', [NotFoundController::class, 'notfound'])->name('notfound');
Route::get('blankpage', [NotFoundController::class, 'blankpage'])->name('blankpage');

// INTERFACE
Route::get('viewButtonPage', [InterfaceController::class, 'viewButtonPage'])->name('viewButtonPage');
Route::get('viewCardPage', [InterfaceController::class, 'viewCardPage'])->name('viewCardPage');
Route::get('viewColorPage', [InterfaceController::class, 'viewColorPage'])->name('viewColorPage');
Route::get('viewBorderPage', [InterfaceController::class, 'viewBorderPage'])->name('viewBorderPage');
Route::get('viewAnimationPage', [InterfaceController::class, 'viewAnimationPage'])->name('viewAnimationPage');
Route::get('viewOtherPage', [InterfaceController::class, 'viewOtherPage'])->name('viewOtherPage');
