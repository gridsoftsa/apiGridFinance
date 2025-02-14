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

Route::group(['middleware' => 'auth:sanctum'], function () {
  Route::get('/user', function (Request $request) {
    return $request->user();
  });
  Route::get('/test', function (Request $request) {
    return [
      'message' => 'This is a test message',
      'user' => $request->user()
    ];
  });
});
