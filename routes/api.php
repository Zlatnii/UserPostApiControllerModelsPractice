<?php
namespace App\Http\Controllers;

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

//Route::get('/', [UserController::class, 'index']);
//Route::post('/', [UserController::class, 'store']);

Route::resource('user', UserController::class);
Route::resource('address', AddressController::class);
Route::resource('role', RoleController::class);
Route::resource('post', PostController::class);
Route::resource('comment', CommentController::class);