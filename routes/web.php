<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginUser;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Middleware\AuthGuard;
use App\Http\Controllers\PortfolioController;

Route::get('/admin/login', [LoginUser::class, 'login']);
Route::post('/admin/adminlogin', [LoginUser::class, 'adminlogin']);
Route::get('/admin/user/{id}', [ContactController::class, 'DeleteContact']);
Route::get('/admin/logout', [LoginUser::class, 'Adminlogout']);

Route::middleware(AuthGuard::class)->group(function () {
    Route::get('/admin/contact', [ContactController::class, 'ShowContact']);
    Route::get('/admin', [DashboardController::class, 'home']);
    Route::get('/admin/my-profile', [ProfileController::class, 'profile']);
    Route::post('/admin/update', [ContactController::class, 'UpdateContact']);
    Route::get('/admin/contact/approve/{id}', [ContactController::class, 'approveContactHandler']);
    Route::get('/admin/approved-contact', [ContactController::class, 'approvedContact']);
    Route::get('/admin/add-services', [ServicesController::class, 'index']);
    Route::post('/admin/add-services', [ServicesController::class, 'addServices']);
    Route::get('/admin/all-services', [ServicesController::class, 'viewServices']);
    Route::get('/admin/all-services/{id}', [ServicesController::class, 'DeleteUser']);
    Route::get('/admin/update/{id}', [ServicesController::class, 'updateUser']);
    Route::get('/admin/portfolio', [PortfolioController::class, 'index']);
    Route::post('/admin/add-portfolio', [PortfolioController::class, 'addPortfolio']);
    Route::get('/admin/portfolio/view', [PortfolioController::class, 'view']);
    Route::get('/admin/portfolio/update/{id}', [PortfolioController::class, 'updatePortfolio']);
    Route::get('/admin/portfolio/delete/{id}', [PortfolioController::class, 'deletePortfolio']);
});
