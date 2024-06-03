<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController; 

Route::get('/', [ProjectController::class, 'index'])->name('index');
Route::get('/project', [ProjectController::class, 'viewproject'])->name('viewproject');
Route::get('/create', [ProjectController::class, 'retourvue'])->name('createproject');
Route::post('/create', [ProjectController::class, 'createproject'])->name('createproject');
Route::post('/projects', [ProjectController::class, 'store'])->name('store_project');
Route::get('/update/{as}', [ProjectController::class, 'update']);
Route::put('/update/{as}', [ProjectController::class, 'edit']);
