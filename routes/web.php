<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KategoriController::class,'index']);

Route::get('/kategori/add',[KategoriController::class,'create']);
Route::post('/kategori/add',[KategoriController::class,'store']);
Route::get('/kategori/{id}/edit',[KategoriController::class,'edit']);
Route::put('/kategori/{id}',[KategoriController::class,'update']);
Route::delete('/kategori/{id}/delete',[KategoriController::class,'destroy']);
