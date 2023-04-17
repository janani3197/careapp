<?php

use App\Http\Controllers\CaretakerController;
use App\Models\Caretaker;
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

Route::get('/', [CaretakerController::class,'index']);

Route::get('/janani/{user}', [CaretakerController::class, 'janani']);
// Route::get('/janani/{user}', [CaretakerController::class, 'janani']);
