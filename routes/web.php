<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard.index')->name('dashboard.index');
Route::view('/dashboard/payments', 'dashboard.payments')->name('dashboard.payments');
Route::view('/dashboard/active-users', 'dashboard.active-users')->name('dashboard.active-users');
