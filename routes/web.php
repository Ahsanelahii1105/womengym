<?php

use App\Http\Controllers\adminController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return view('index');
});

Route::get('/course', [adminController::class, 'coursecreate']);
Route::post('/course', [adminController::class, 'courseinsert']);

Route::get('/trainer', [adminController::class, 'trainercreate']);
Route::post('/trainer', [adminController::class, 'trainerinsert']);

Route::get('/member', [adminController::class, 'membercreate']);
Route::post('/member', [adminController::class, 'memberinsert']);

Route::get('/course/{id}/trainers', [adminController::class, 'fetchTrainers']);

Route::get('/backpage', function () {
    return view('backpage');
});


Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
