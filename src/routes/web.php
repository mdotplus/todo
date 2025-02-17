<?php

use App\Http\Controllers\TodoController;
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

Route::group(['prefix' => '/'], function() {
    Route::get('', [TodoController::class, 'index']);
    Route::post('todos', [TodoController::class, 'store']);
    Route::post('todos/update', [TodoController::class, 'update']);
    Route::post('todos/delete', [TodoController::class, 'delete']);
});
