<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KategoriController::class,'index']);

Route::get('/kategori/add',[KategoriController::class,'create']);
Route::post('/kategori/add',[KategoriController::class,'store']);
Route::get('/kategori/edit/{$id}',[KategoriController::class,'edit']);
