<?php

// forget password 
Route::post('user/forgot_password', [UserController::class, 'forgotPassword'])->name('user.forgotPassword');
Route::post('user/reset_password', [UserController::class, 'resetPassword'])->name('password.reset');