<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*Route::get('/custom', [CustomController::class, 'getAllCustomModel']);
Route::post('/custom', [CustomController::class, 'postCustomModel']);
Route::get('/custom/{id}', [CustomController::class, 'getCustomModelByid']);
Route::put('/custom/{id}', [CustomController::class, 'updateCustomModel']);
Route::delete('/custom/{id}', [CustomController::class, 'deleteCustomModel']);*/

