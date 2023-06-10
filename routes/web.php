<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoclogsController;
use App\Http\Controllers\DokumentController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
Route::middleware('only_guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerProses']);
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->middleware('only_admin');
    Route::get('search', [DashboardController::class, 'searchDocument']);
    Route::get('profile', [UserController::class, 'profile'])->middleware('only_client');

    Route::get('logout', [AuthController::class, 'logout']);

    Route::get('dokument', [DokumentController::class, 'index']);
    Route::get('document-add', [DokumentController::class, 'add']);
    Route::post('document-add', [DokumentController::class, 'input']);
    Route::get('dokument-delete/{slug}', [DokumentController::class, 'delete']);
    Route::get('dokument-deleted', [DokumentController::class, 'deletedDoc']);
    Route::delete('force-Delete/{id}', [DokumentController::class, 'forceDelete']);
    Route::get('dokument-restore/{slug}', [DokumentController::class, 'Restore']);
    Route::get('dokument-edit/{id}', [DokumentController::class, 'edit']);
    Route::post('dokument-edit/{id}', [DokumentController::class, 'update']);
    Route::get('/view/{id}', [DokumentController::class, 'view']);

    Route::get('Category', [CategoryController::class, 'index']);
    Route::put('Category/{slug}', [CategoryController::class, 'update']);

    Route::get('category-add', [CategoryController::class, 'add']);
    Route::post('category-add', [CategoryController::class, 'store']);
    Route::get('category-edit/{slug}', [CategoryController::class, 'edit']);
    Route::put('category-edit/{slug}', [CategoryController::class, 'update']);
    Route::get('category-delete/{slug}', [CategoryController::class, 'delete']);
    Route::get('category-deleted', [CategoryController::class, 'deletedCategory']);
    Route::get('category-restore/{slug}', [CategoryController::class, 'Restore']);

    Route::get('RentLogs', [DoclogsController::class, 'DocRent']);
});
