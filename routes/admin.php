<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get(
    'project/{id}',
    [ProjectController::class, 'show']
)->middleware(['auth', 'verified', 'admin'])->name('project');