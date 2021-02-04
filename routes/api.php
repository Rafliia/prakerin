<?php


use App\Models\Provinsi;
use App\Models\Kasus;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\Rw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hari', [ApiController::class,'hari']);
Route::get('/indo', [ApiController::class,'indonesia']);
Route::get('/provinsi1/{id}', [ApiController::class,'provinsi']);
Route::get('/provinsi2', [ApiController::class,'provinsi1']);
Route::get('/kota', [ApiController::class,'kota']);
Route::get('/kecamatan', [ApiController::class,'kecamatan']);
Route::get('/desa', [ApiController::class,'desa']);

// API Provinsi
Route::get('provinsi', [ApiController::class, 'index']);
Route::post('provinsi', [ApiController::class, 'store']);
Route::get('provinsi/{id}', [ApiController::class, 'show']);
Route::post('provinsi/update/{id}', [ApiController::class, 'update']);
Route::delete('/provinsi/{id}', [ApiController::class, 'destroy']);