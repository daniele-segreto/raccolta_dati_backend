<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Qui puoi registrare le route API per la tua applicazione. Queste
| route vengono caricate dal RouteServiceProvider e tutte saranno
| assegnate al gruppo di middleware "api". Fai qualcosa di grandioso!
|
*/

// Route per ottenere l'utente autenticato (richiede autenticazione Sanctum)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route per creare un nuovo utente
Route::post('/users', [UserController::class, 'store']);

