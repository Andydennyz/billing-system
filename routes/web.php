<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/active-users', function () {
    return view('users.active-users');
})->name('active-users');


Route::get('/users', function () {
    return view('users.index');
})->name('users');

Route::get('/expiry-dates', function () {
    return view('users.expiry-dates');
})->name('expiry-dates');

Route::get('/ip-bindings', function () {
    return view('users.ip-bindings');
})->name('ip-bindings');