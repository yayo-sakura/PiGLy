<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PiglyController;
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

Route::get('/weight_logs', [PiglyController::class, 'weight_logs']);
Route::get('/register/step1', [PiglyController::class, 'register_step1']);
Route::get('/register/step2', [PiglyController::class, 'register_step2']);
Route::get('/login', [PiglyController::class, 'login']);
Route::get('/weight_logs/{:weightLogId}/update', [PiglyController::class, 'weight_logs_update']);
Route::get('/wight_logs/goal_setting', [PiglyController::class, 'weight_logs_goalsetting']);
