<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});

Route::apiResources(['user'=>'App\Http\Controllers\API\UserController']);
Route::apiResources(['paciente'=>'App\Http\Controllers\API\PacientesController']);
//Route::get('profile','App\Http\Controllers\API\UserController');
Route::put('profile','App\Http\Controllers\API\UserController@updateProfile');
Route::get('findUser','App\Http\Controllers\API\UserController@search');
Route::get('findPaciente','App\Http\Controllers\API\PacientesController@search');
//Route::get('findUser', 'API\UserController@search');

