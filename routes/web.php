<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'viewAll'])->name('task.all');
Route::get('/task', fn() => view('task'))->name('viewTask');

Route::post('/task', [TaskController::class, 'create'])->name('task.create');
Route::get('/task/{id}', [TaskController::class, 'get'])->name('task.get');
Route::put('/task/{id}', [TaskController::class, 'update'])->name('task.update');
Route::delete('/task/{id}', [TaskController::class, 'delete'])->name('task.delete');

Route::get('/task/create', fn() => view('createTask'));
