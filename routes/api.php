<?php

use App\Http\Controllers\Admin\TruckController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\PasswordForgotController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Me\meController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/me', [meController::class, 'show']);
    Route::get('trucks', [TruckController::class, 'index']);
    Route::post('truck', [TruckController::class, 'store']);
});
Route::get('tenant', [TruckController::class, 'tenant']);


Route::post('login', LoginController::class);
Route::post('logout', LogoutController::class);
Route::post('register', RegisterController::class);
Route::post('verify-email', VerifyEmailController::class);
Route::post('forgot-password', PasswordForgotController::class);
Route::post('reset-password', PasswordResetController::class);
