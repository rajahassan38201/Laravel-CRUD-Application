<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductController::class,'index'])
->name('products.index');

Route::get('product/create',[ProductController::class,'create'])
->name('products.create');

Route::post('product/store',[ProductController::class,'store'])
->name('products.store');

Route::get('product/{id}/edit',[ProductController::class,'edit']);

Route::put('product/{id}/update',[ProductController::class,'update']);

Route::get('product/{id}/delete',[ProductController::class,'destroy']);

Route::get('product/{id}/view',[ProductController::class,'view']);
