<?php

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

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;

Route::post('/product/add', [ProductController::class, 'create']);
Route::put('/product/{id}/edit', [ProductController::class, 'update']);
Route::post('/client/register', [UserController::class, 'create']);
Route::put('/client/profile', [UserController::class, 'edit']);
Route::get('/company', [CompanyController::class, 'index']);
Route::post('/company/register', [CompanyController::class, 'create']);
Route::put('/company/profile', [CompanyController::class, 'edit']);
Route::post('/job', [JobController::class, 'create']);
Route::put('/job', [JobController::class, 'edit']);
