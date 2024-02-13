<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ebookController;
use App\Http\Controllers\activityController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\WishlistController;


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

Route::controller(AuthController::class)->group(function(){
    Route::post('login', 'login');
    Route::post('register', 'register');
});

Route::post('register', [AuthController::class, 'Register']);

Route::post('/auth/register',[AuthController::class,'register']);

Route::post('/ebook', [ebookController::class, 'create']);

Route::resource('books', BookController::class);

Route::resource('wishlist', WishlistController::class)->middleware('auth:api');

Route::post('/log-activity', [activityController::class, 'logActivity']);
