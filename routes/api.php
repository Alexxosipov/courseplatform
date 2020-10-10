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

Route::middleware('guest')->group(function(){
    Route::prefix('/auth')->namespace('Auth')->group(function(){
        Route::post('/login', 'LoginController@login');
    });
});

Route::prefix('manage')->namespace('Manage')->middleware(['auth:sanctum'])->group(function(){
    Route::prefix('/teams')->namespace('Team')->group(function(){
        Route::get('/', 'TeamController@index');
    });
});

Route::get('/test', function(){
    return \App\Http\Resources\UserItem::collection(\App\Models\User::all());
});
