<?php

use App\Http\Controllers\API\PenggunaController;
use App\Http\Controllers\API\PlantController;
use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Pengguna;
use App\Models\Plant;
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
Route::get('pengguna', [PenggunaController::class, 'index']);
Route::get('plant', [PlantController::class, 'index']);
Route::post('pengguna/store', [PenggunaController::class, 'store']);
Route::post('plant/store', [PlantController::class, 'store']);
Route::get('penggguna/show/{id}', [PenggunaController::class, 'show']);
Route::get('plant/show/{id}', [PlantController::class, 'show']);
Route::post('pengguna/update/{id}', [PenggunaController::class, 'update']);
Route::post('plant/update/{id}', [PlantController::class, 'update']);
Route::get('pengguna/destroy/{id}', [PenggunaController::class, 'destroy']);
Route::get('plant/destroy/{id}', [PlantController::class, 'destroy']);
Route::post('login', [AuthController::class, 'login']);
Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/logout', [AuthController::class, 'logout']);

// Route::post('/tokens/create', function (Request $request) {
//     $token = $request->user()->createToken($request->token_name);
 
//     return ['token' => $token->plainTextToken];
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
