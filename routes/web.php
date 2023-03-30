<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/client/add', [ClientController::class,'addClient'] )->name('addClient');
Route::post('/login', [ClientController::class,'login'] )->name('login');
Route::get('/', [ClientController::class,'accueil'] )->name('accueil');
Route::get('/status', [ClientController::class,'status'] )->name('status');
Route::get('/connexion', [ClientController::class,'connexion'] )->name('connexion');
Route::get('/formulaireClient', [ClientController::class,'formulaireClient'] )->name('formulaireClient');
