<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Esegui le migrazioni
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Colonna per il nome dell'utente
            $table->string('email')->unique(); // Colonna per l'email dell'utente (univoca)
            $table->string('password'); // Colonna per la password dell'utente
            $table->timestamps(); // Colonne per la registrazione delle timestamp di creazione e aggiornamento
        });
    }

    /**
     * Ripristina le migrazioni
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Elimina la tabella degli utenti
    }
};
