<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NomeController extends Controller
{
    public function inviaDati(Request $request)
    {
        // Utilizza $request per accedere ai dati inviati nella richiesta POST
        $dati = $request->all();

        // Logica per gestire i dati
        
        
        // Ritorna in JSON    
        return response()->json(['messaggio' => 'Dati ricevuti con successo']);
    
        // Ritorna una vista passando l'oggetto e l'array alla vista
        return view('nome.vista')
            ->with('dati', $dati);
    }
}
