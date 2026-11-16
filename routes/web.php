<?php

use App\Http\Controllers\BbsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PracticeController;
use Illuminate\Support\Facades\Route;

Route::prefix('show')->group(function () {
    Route::get('/{id}',  [UserController::class, 'show']);
});

Route::get('/', [UserController::class,'index']);
Route::get('/about', [UserController::class,'about']);

for ($i = 1; $i <= 21; $i++) {
    Route::get('/practice/' . $i, [PracticeController::class, 'practice' . $i]);
}

Route::get('/second/{id}',[BbsController::class,'second']);

Route::get('/dashboard', [UserController::class,'dashboard']);
Route::get('/db', [BbsController::class,'index']);
Route::get('/catalog', [UserController::class,'posts']);
Route::get('/catalog/{id}', [UserController::class,'oneCategory']);
Route::get('/tag/{id}', [UserController::class,'oneTag']);

Route::get('/categories',[CategoryController::class,'index']);
Route::get('/category',[CategoryController::class,'add_index']);
Route::post('/category',[CategoryController::class,'create'])->name('category_create');

Route::get('/category/{id}',[CategoryController::class,'edit_index']);
Route::post('/category/{id}',[CategoryController::class,'edit_category'])->name('category_edit');

Route::view('/practice','practice.index');

Route::get('/testfactory',[UserController::class,'test_factory']);
