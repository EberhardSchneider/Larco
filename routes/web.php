<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditUserController;
use App\Http\Controllers\MailChimpController;
use App\Http\Controllers\UserController;
use App\Models\Rehearsal;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	Log::info('Login in...');
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/mail', [MailChimpController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/presence', [DashboardController::class, 'presence'])->middleware(['auth', 'verified'])->name('presence');


Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::post('/user/store', 'store');
});

Route::controller(EditUserController::class)->group(function () {
    Route::get('/edit-user', 'show')->name('edit-user');
    Route::post('/edit-user', 'store');
});



require __DIR__.'/auth.php';
