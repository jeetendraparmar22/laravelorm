<?php

use App\Http\Controllers\TestController;
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
Route::get('/displayName', [TestController::class, 'displayName']);
Route::post('/addUser', [TestController::class, 'addUser']);
Route::post('/addPost', [TestController::class, 'addPost']);
Route::post('/addComment', [TestController::class, 'addComment']);
Route::get('/getPost', [TestController::class, 'getPostWithComment']);
