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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/Bar', ['App\Http\Controllers\BAR', 'listbar']);
Route::get('/BarInfo/{idBar}', ['App\Http\Controllers\BAR', 'BarInfo']);
Route::post('/authentification', ['App\Http\Controllers\ClientController', 'authentifierUtilisateur']);
Route::get('/GetNourriture/{idBar}', ['App\Http\Controllers\ViewNourritureController', 'getNourriture']);
Route::get('/GetBoissons/Alcool/{idBar}', ['App\Http\Controllers\ViewBoissonsAlcoolController', 'getBoissonsAlcool']);
Route::get('/GetBoissons/SansAlcool/{idBar}', ['App\Http\Controllers\ViewBoissonsSansAlcoolController', 'getBoissonsSansAlcool']);
Route::get('/GetBoissons/{idBar}', ['App\Http\Controllers\ViewBoissonsController', 'getBoissons']);
Route::post('/auth/register', ['App\Http\Controllers\Api\AuthController', 'createUser']);
Route::post('/auth/login', ['App\Http\Controllers\Api\AuthController', 'loginUser'])->name('login');
Route::get('/random', ['App\Http\Controllers\Api\AuthController', 'random']);
Route::get('/test', ['App\Http\Controllers\CommandeController', 'random']);
Route::get('/email', ['App\Http\Controllers\CommandeController', 'email']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/ajoutCommande/emporter/{idClient}/{idBar}', ['App\Http\Controllers\CommandeController', 'ajoutCommandeEmporter']);
    Route::post('/ajoutCommande/surplace/{idBarman}/{idBar}', ['App\Http\Controllers\CommandeController', 'ajoutCommandeSurplace']);
});
