<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CardMetaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);

Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::get('test',function(){
        return 'you are login';
    });
    Route::resource('user', UserController::class);
    Route::resource('card', CardController::class);
    Route::post('cardmeta',[CardMetaController::class,'store']);
    Route::put('cardmeta/{id}',[CardMetaController::class,'update']);
    Route::delete('cardmeta/{id}',[CardMetaController::class,'destroy']);
    Route::post('logout',[AuthController::class,'logout']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
