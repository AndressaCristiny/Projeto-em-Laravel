<?php

use App\Http\Controllers\EventController;
//use App\Http\Controllers\ApiController;
use App\Models\Produto;
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

route::get('/ListProd', [EventController::class, 'ApiList']);
route::get('/ApiIbge', [EventController::class, 'ApiIbge']);
route::get('/ApiProd_local', [EventController::class, 'ApiProd_local']);