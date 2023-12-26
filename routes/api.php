<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users',[UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'findOne']);
Route::post('/users/post', [UserController::class, 'post']);

Route::get('/address',[AddressController::class, 'index']);
Route::get('/address/{id}', [AddressController::class, 'findOne']);
Route::post('/address/post', [AddressController::class, 'post']);

Route::get('/invoices', [InvoiceController::class, 'index']);
Route::get('/invoices/{id}', [InvoiceController::class, 'findOne']);
Route::post('/invoices/post', [InvoiceController::class, 'post']);
