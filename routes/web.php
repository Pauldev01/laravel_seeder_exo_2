<?php

use App\Http\Controllers\CompagnieController;
use App\Models\Compagnie;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CompagnieController::class, 'index']);
Route::get('/show/{id}', [CompagnieController::class, 'show']);
Route::get('/edit/{id}', [CompagnieController::class, 'edit']);

Route::post('/update/{id}', [CompagnieController::class, 'update']);