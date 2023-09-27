<?php

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BaseController::class, 'root'])->name('root');

Route::middleware('auth')->group(function () {
    Route::get('home', [HomeController::class, 'home'])->name('home');
    Route::get('create-user', [AddUserController::class, 'createUser'])->name('create-user');
    Route::get('make-job', [JobController::class, 'makeJob'])->name('make-job');
    Route::get('get-users', [UsersController::class, 'getUsers'])->name('get-users');
    Route::get('get-reports', [ReportsController::class, 'getReports'])->name('get-reports');

    Route::post('upload-pdf', [FileUploadController::class, 'uploadPdf'])->name('upload-pdf');
});
