<?php

use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;



Route::get('/login',[LoginController::class,'show'])->name('login.show')->middleware('guest');
Route::get('/',function(){return to_route('login.show');});
Route::post('/login',[LoginController::class,'login'])->name("login")->middleware('guest');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/dashboard',[DashboardController::class,'show'])->name('dashboard.show')->middleware('auth');
Route::get('/stock',[StockController::class,'show'])->name('stock.show')->middleware('auth');
Route::delete('/stock/delete/{id}',[StockController::class,'delete'])->name('product.delete')->middleware('auth');
Route::get('/stock/product/edit/{id}',[StockController::class,'edit'])->name('edit.show')->middleware('auth');
Route::put('/stock/product/edit/{id}',[StockController::class,'update'])->name('product.update')->middleware('auth');
Route::get('/user',[UserController::class,'show'])->name('user.show')->middleware('auth');
Route::put('/user/{id}',[UserController::class,'update'])->name('user.update')->middleware('auth');
Route::get('/stock/add',[StockController::class,'showadd'])->name('stock.showadd')->middleware('auth');
Route::post('/stock/add',[StockController::class,'add'])->name('stock.add')->middleware('auth');
