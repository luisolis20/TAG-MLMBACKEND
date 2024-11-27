<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnviarComentarioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CorreoController;

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
Route::post('v1/enviar-comentario', [EnviarComentarioController::class, 'enviarComentario']);
Route::post('v1/enviar-correo', [CorreoController::class, 'enviarCorreo']);
Route::post('/login', [UserController::class, 'login']);
Route::apiResource("v1/users",UserController::class);
Route::apiResource("v1/cliente",ClienteController::class);
