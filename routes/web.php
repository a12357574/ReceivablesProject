<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('admin');

Route::get('/admin/invoices', [App\Http\Controllers\Admin\InvoiceController::class, 'index']);

Route::get('/admin/invoices/create', [App\Http\Controllers\Admin\InvoiceController::class, 'create']);

Route::post('/admin/invoices', [App\Http\Controllers\Admin\InvoiceController::class, 'store']);

Route::get('/admin/invoices/{InvoiceID}/edit',[App\Http\Controllers\Admin\InvoiceController::class, 'edit']);

Route::put('/admin/invoices/{InvoiceID}', [App\Http\Controllers\Admin\InvoiceController::class, 'update']);