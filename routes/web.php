<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\FindController;

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

Route::get('/', [TodoController::class, 'index']);
Route::post('/add', [TodoController::class, 'create']);
Route::post('/update', [TodoController::class, 'update']);
Route::post('/delete', [TodoController::class, 'delete']);

Route::get('/find', [FindController::class, 'index']);
Route::post('/find/search', [FindController::class, 'search']);
Route::post('/find/update', [FindController::class, 'update']);
Route::post('/find/delete', [FindController::class, 'delete']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

