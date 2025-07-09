<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));

Route::get('/tasks', [TaskController::class, 'getTasks']);

Route::get('/task', fn() => view('task'))->name('viewTask');
Route::post('/task', [TaskController::class, 'createTask'])->name('createTask');
Route::get('/task/create', fn() => view('createTask'));
