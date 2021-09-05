<?php

use App\Http\Controllers\KnjigaController;
use App\Http\Controllers\IznajmljivanjeController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/knjigas', [KnjigaController::class, 'vratiSveKnjige']);

Route::post('/knjigas', [KnjigaController::class, 'dodajKnjigu']);

Route::put('/knjigas/{knjiga}', [KnjigaController::class, 'izmeniKnjigu']);

Route::delete('/knjigas/{knjiga}', [KnjigaController::class, 'izbrisiKnjigu']);

Route::get('/iznajmljivanjes', [IznajmljivanjeController::class, 'vratiSvaIznajmljivanja']);

Route::post('/iznajmljivanjes', [IznajmljivanjeController::class, 'dodajIznajmljivanje']);


