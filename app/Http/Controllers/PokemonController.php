<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    public function show($id)
    {
        //Richiesta Http alla PokeApi
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$id}");

        //Controlla se la risposta è andata a buon fine 
        if ($response->successful()) {
            //Decodifica la ripostasta JSON
            $pokemonData = $response->json();

            return view('show', compact('pokemonData'));
        } else {
            //Gestisce se la richiesta se non è andata a buon fine
            return view('show')->with('error', 'Errore recupero dati Pokemon');
        }
    }

    public function redirectToPokemon(Request $request)
    {
        $id = $request->input('pokemon_id');

        //Redirect della pagina
        return redirect()->route('show', ['id' => $id]);
    }
}
