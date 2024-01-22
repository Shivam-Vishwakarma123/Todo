<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('todo_show', [TodoController::class, 'show']);
Route::get('todo_delete/{id}', [TodoController::class, 'destroy']);
Route::get('todo_create', [TodoController::class, 'create']);
Route::post('todo_submit', [TodoController::class, 'store']);
Route::get('todo_edit/{id}', [TodoController::class, 'edit']);
Route::post('todo_update/{id}', [TodoController::class, 'update']);
// Route::get('/your/index', [TodoController::class, 'index'])->name('your.index');
