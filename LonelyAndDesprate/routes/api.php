<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;


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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::get('/get-users', [UsersController::class, 'getUsers']);
    Route::post('/update-user', [UsersController::class, 'updateUser']); 
    Route::post('/search-user', [UsersController::class, 'search']); 
    Route::post('/add-favorite', [UsersController::class, 'addFavorite']);
    Route::post('/add-message', [UsersController::class, 'addMessage']);   
    Route::get('/get-matches', [UsersController::class, 'getMatched']); 
    Route::get('/get-user-pics', [UsersController::class, 'getUserPics']);
    Route::post('/add-message', [UsersController::class, 'addMessage']); 
});