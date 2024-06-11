<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\LoggerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserActivityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/sign-in', [LoginController::class, 'login']);
Route::middleware('auth')->group(function () {
    Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');
    Route::prefix('dashboard')->group(function () {
        //Dashboard Route Section
        Route::get('/', [DashboardController::class, 'dashboard']);
        Route::post('/change-password', [DashboardController::class, 'changePassword']);
        Route::get('/myprofile', [UserProfileController::class, 'show']);
        Route::get('/myprofile/edit/{id}', [UserProfileController::class, 'edit']);
        Route::put('/myprofile/update/{id}', [UserProfileController::class, 'update']);
        //Users
        Route::get('/users', [UserActivityController::class, 'users']);
        Route::get('/user/add', [UserController::class, 'add']);
        Route::put('/users/update/{id}', [UserController::class, 'update']);
        Route::get('/users/show/{id}', [UserController::class, 'show']);
    });


    Route::middleware('admin')->group(function () {

        Route::get('services', [DashboardController::class, 'displaylogs']);
        
        Route::get('cancel-reasons', [DashboardController::class, 'cancelReasons'])->name('cancelReasons');
        Route::get('cancel-reasons/edit/{id}', [DashboardController::class, 'editcancelReasons'])->name('editcancelReasons');
        Route::put('cancel-reasons/update/{id}', [DashboardController::class, 'updatecancelReasons'])->name('updatereason');
        Route::get('cancel-reasons/show/{id}', [DashboardController::class, 'showcancelReasons'])->name('showreason');
        Route::get('cancel-reasons/delete/{id}', [DashboardController::class, 'deletecancelReasons'])->name('deletereason');
        Route::get('cancel-reasons/create', [DashboardController::class, 'createcancelReasons'])->name('createreason');
        Route::post('cancel-reasons/save', [DashboardController::class, 'storecancelReasons'])->name('storereason');
        Route::get('orders', [DashboardController::class, 'orders'])->name('orders');
        Route::get('orders/show/{id}', [DashboardController::class, 'showOrders'])->name('order.show');
        
        //Files
        Route::get('files', [DashboardController::class, 'Showfiles']);
      
        //User Activity
        Route::get('logActivity', [UserActivityController::class, 'logActivity']);
        Route::get('deleteLogs', [UserActivityController::class, 'deleteAll']);
        Route::get('/logActivity/delete/{id}', [UserActivityController::class, 'delete']);
        Route::get('/logActivity/softDelete/{id}', [UserActivityController::class, 'softDelete']);

        Route::get('/logActivity/logShow/{id}', [UserActivityController::class, 'show']);

        //log profiler
        Route::get('logs', [LoggerController::class, 'index']);

        //upload pictures
        Route::get('open', [ImageUploadController::class, 'showUploadPage']);
        Route::post('upload', [ImageUploadController::class, 'fileUpload']);

        
        //Error logs
        Route::get('dashboard/logs', [LoggerController::class, 'logs']);
        Route::get('dashboad/logs/delete/{id}', [LoggerController::class, 'destroy']);

    });
    
});