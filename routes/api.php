<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frant\dummyAPI;
use App\Http\Controllers\Frant\MenuController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\RestaurantController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\OrderController;


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

Route::get('data',[dummyAPI::class,'getData']);

Route::get('list',[MenuController::class,'category']);

Route::post('login', [LoginController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function () {

    Route::get('listrestaurant/{name?}',[RestaurantController::class,'list']);
    Route::post('createrestaurant', [RestaurantController::class, 'store']);
    Route::put('updaterestaurant/{id}', [RestaurantController::class, 'update']);
    Route::delete('deleterestaurant/{id}', [RestaurantController::class, 'destroy']);

    Route::post('listcart', [CartController::class, 'index']);
    Route::post('insertcart', [CartController::class, 'store']);
    Route::put('updatecart/{id}', [CartController::class, 'update']);
    Route::delete('deletecart/{id}', [CartController::class, 'destroy']);
    
    Route::post('insertorder', [OrderController::class, 'store']);
    Route::get('showorder/{id}', [OrderController::class, 'show']);

    // Route::post('insertorder', [OrderController::class, 'store']);
});
Route::post('createregister', [RegisterController::class, 'create']);
Route::get('showregister/{id?}', [RegisterController::class, 'show']);
Route::put('updateregister/{id}', [RegisterController::class, 'update']);
