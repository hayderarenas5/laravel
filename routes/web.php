<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/api/tasks', [TaskController::class, 'getTasks']);
Route::post('/api/tasks', [TaskController::class, 'createTask']);
Route::get('/api/tasks/{id}', [TaskController::class, 'showTask']);
Route::put('/api/tasks/{id}', [TaskController::class, 'update']);
Route::delete('/api/tasks/{id}', [TaskController::class, 'destroy']);