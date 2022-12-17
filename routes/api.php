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
Route::post('/ajoutCommande', ['App\Http\Controllers\CommandeController', 'ajoutCommande']);
Route::get('/GetNourriture/{idBar}', ['App\Http\Controllers\ViewNourritureController', 'getNourriture']);
Route::get('/GetBoissons/Alcool/{idBar}', ['App\Http\Controllers\ViewBoissonsAlcoolController', 'getBoissonsAlcool']);
Route::get('/GetBoissons/SansAlcool/{idBar}', ['App\Http\Controllers\ViewBoissonsSansAlcoolController', 'getBoissonsSansAlcool']);
