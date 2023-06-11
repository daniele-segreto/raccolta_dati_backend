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
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Creazione dell'utente nel database
        $user = User::create($validatedData);

        // Restituzione della risposta
        return response()->json([
            'message' => 'Utente creato con successo',
            'user' => $user,
        ], 201);
    }
}
