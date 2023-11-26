<?php

use App\Http\Controllers\CssController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LogicaController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Abas fases
Route::get('/fases', function () {
    return view('niveis.fases');
})->name('fases');

// Abas lógicas
Route::get('/subfases_logica', function () {
    return view('logica.subfases');
})->name('subfases_logica');
Route::resource('/logica', LogicaController::class);

// Abas HTML
Route::resource('/html', HtmlController::class);
Route::get('/subfases_html', function () {
    return view('html.subfases');
})->name('subfases_html');

// Abas CSS
Route::resource('/css', CssController::class);
Route::get('/subfases_css', function () {
    return view('css.subfases');
})->name('subfases_css');


// Rotas de autenticação para usuários
Auth::routes();

// Rotas das páginas do site
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/faqs', [SiteController::class, 'faqs'])->name('faqs');
Route::get('/ias', [SiteController::class, 'ias'])->name('ias');
Route::get('/jogos', [SiteController::class, 'jogos'])->name('jogos');
Route::get('/tendencias', [SiteController::class, 'tendencias'])->name('tendencias');
Route::get('/linguagens', [SiteController::class, 'linguagens'])->name('linguagens');
