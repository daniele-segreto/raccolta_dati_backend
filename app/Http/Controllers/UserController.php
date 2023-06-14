<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validazione dei dati
        $validatedData = $request->validate([
            'name' => 'required|string', // Il campo "name" è obbligatorio e deve essere una stringa
            'email' => 'required|email|unique:users', // Il campo "email" è obbligatorio, deve essere un'email valida e univoca nella tabella degli utenti
            'password' => 'required|string|min:8', // Il campo "password" è obbligatorio, deve essere una stringa di almeno 8 caratteri
        ]);

        // Creazione dell'utente nel database
        $user = User::create($validatedData);

        // Restituzione della risposta
        return response()->json([
            'message' => 'Utente creato con successo', // Messaggio di successo
            'user' => $user,
        ], 201);
    }
}
