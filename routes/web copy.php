<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// CREARE IL PROGETTO

// APRIRE IL PROGETTO

// INSTALLIAMO LE DIPENDENZE

// FACCIAMO PARTIRE L ARTISAN PHP / NPM RUN DEV

// FACCIO PARTIRE MAMP

// VADO SU LOCALHOST

// PHPMYADMIN

// CREO IL DB

// IMPORTO IL FILE  ZIP DI OLGA

// VADO SU .ENV E IMPOSTO:

// DB_PORT = la mia port
// DB_DATABASE=books_db
// DB_PASSWORD = root

// CREO CONTROLLER CON 

// PHP ARTISAN MAKE:model Movie
// PHP ARTISAN MAKE:controller HomeController

// APRO HOMECONTROLLER

// CREO PUBLIC FUNCTION INDEX
// $BOOKS = BOOK::ALL();
// RETURN VIEW('HOME', COMPACT('BOOKS');

// ORA ENTRO IN ROUTES

// WEB.PHP

// E INSERISCO 

// ROUTE::GET('/' [HOMECONTROLLER::CLASS,'INDEX])->NAME('HOME');