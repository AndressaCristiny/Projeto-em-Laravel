<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [EventController::class, 'Index']);
Route::get('/php/create.blade.php', [EventController::class, 'ListCre']);
Route::get('/php/update.blade.php', [EventController::class, 'ListUp']);
Route::get('/php/delete.blade.php', [EventController::class, 'ListDel']);

Route::post('/php', [EventController::class, 'Create']);
Route::put('/php', [EventController::class, 'Update']);
Route::delete('/php', [EventController::class, 'Delete']);

/*Route::get('/php/create.blade.php', function(){
    $ibge = Http::get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/33/municipios');
    $ibgeArray = $ibge->json();

    return view('php.create', ['produtos' => $listaArray]);
});*/