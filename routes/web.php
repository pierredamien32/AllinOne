<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('accueil');
});
Route::get('/status', function () {
    return view('status');
});
Route::get('/connexion', function () {
    return view('connexion');
});
Route::get('/formulaireClient', function () {
    return view('formulaireClient');
});
Route::get('/formulaireEntreprise', function(){
    return view('formulaireEntreprise');
});