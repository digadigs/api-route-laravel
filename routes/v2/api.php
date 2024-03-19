<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Get Method
Route::get('/get', function () {
    return 'This is GET method v2';
});

// Post Method
Route::post('/post', function () {
    return 'This is POST method v2';
});

// Put Method
Route::put('/put/{id}', function () {
    return 'This is PUT method v2';
});

// Patch Method
Route::patch('/putv2/{id}', function () {
    return 'This is PATCH method v2';
});

// Delete Method
Route::delete('/delete/{id}', function () {
    return 'This is DELETE method v2';
});