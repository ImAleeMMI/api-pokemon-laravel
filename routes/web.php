<?php

use App\Http\Controllers\CalcController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NomeController;
use App\Http\Controllers\PokemonController;

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
    return view('welcome');
});

// Route::get('/home', function () {
//     return 'Benvenuto nella pagina home!';
// });

// Route::get('/user/{id}', function ($id) {
//     return "Visualizzazione del profilo dell'utente con ID: $id";
// });

// Route::get('/lollo/{query}', function ($query = null) {
//     return "Ricerca per: $query";
// })->where('query', '[A-Za-z]+');

// Route::get('/lista', function () {
//     return "Lista Piatti: Nigiri, Onigiri, Patatine fritte, Spaghetti di soia piccanti con carne";
// });

// Route::get('/categoria', function () {
//     return "Lista piatti di categoria: Primi, Secondi, Sushi, Fritti, Dolci";
// })->where('query', '[A-Za-z]+');

// Route::get('/carrello', function () {
//     return "Carrello piatti ordinati: Spaghetti di soia piccanti con carne, Nigiri, Patatine fritte";
// });

// Route::get('/dettaglio/{id}', function ($id) {
//     return "Dettaglio del piatto con Id: $id";
// });

// Route::get('/fidelitycard/{query}', function ($query = null) {
//     return "Ecco la tua fedelity card: $query";
// })->where('query', '[A-Za-z]+');

/*
//Visualizzazione della lista degli eventi
Route::get('/events', function () {
    
});

//Filtraggio per categoria
Route::get('/events/category/{category}', function ($category) {
});

//Ricerca testuale degli eventi
Route::get('/events/search', function () {
});

//Visualizzazione dei dettagli dell'evento
Route::get('/events/{event}', function ($event) {
});

//Registrazione e autenticazione degli utenti
//Auth::routes();

//Creazione di un nuovo evento
Route::middleware('auth')->group(function () {
    Route::get('/event/create', function () {
    });

    Route::post('/event/store', function () {
    });
});

//Visualizzazione delle stastistiche di partecipazione di un utente
Route::middleware('auth')->get('/user/stats', function() {

});
*/
Route::get('/events', [EventController::class, 'index']);

Route::post('/invia-dati', [NomeController::class, 'inviaDati']);

// Rotte calcolo somma
Route::get('/somma', [CalcController::class, 'index']);
Route::post('/result', [CalcController::class, 'calculate']);

//Rotte Pokemon
Route::get('/pokemon/{id}', [PokemonController::class, 'show'])->name('show');
Route::post('/pokemon', [PokemonController::class, 'redirectToPokemon']);


