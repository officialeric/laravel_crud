<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/admin',[UserController::class,'index'])->name('user.index');

Route::group(['prefix'=> 'admin/user'], function () {
    Route::get('/create',[UserController::class,'create'])->name('user.create');
    Route::post('/add',[UserController::class,'store'])->name('user.store');
    Route::get('/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::post('/delete', [UserController::class, 'destroy'])->name('user.delete');
});
