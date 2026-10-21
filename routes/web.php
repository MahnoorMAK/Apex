<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('Pages.login');})->name('login');
Route::get('/Contact Us', function () {return view('Pages.Contact Us');})->name('Contact Us');
Route::get('/Home', function () {return view('Pages.Home');})->name('Home');
Route::get('/About', function () {return view('Pages.About');})->name('About');
Route::get('/Register', function () {return view('Pages.Register');})->name('Register');
Route::get('/Services', function () {return view('Pages.Services');})->name('Services');