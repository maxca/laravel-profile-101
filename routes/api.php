<?php

use Illuminate\Http\Request;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/simple', [SimpleController::class ,'test']);
Route::post('/create', [StudentController::class, 'create']);
Route::get('/get', [StudentController::class, 'get']);
Route::get('/page', [StudentController::class, 'page']);

Route::delete('/delete', [StudentController::class, 'delete']);
Route::get('/search', [StudentController::class, 'search']);
Route::post('/update', [StudentController::class, 'update']);
# create address 
Route::post('/address/create', [StudentController::class, 'createAddress']);

