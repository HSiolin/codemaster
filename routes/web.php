<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuth\LoginController;
use App\Http\Controllers\AdminAuth\RegisterController;
use App\Http\Controllers\CssController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\LogicaController;
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
});

// Abas lógica
Route::resource('/logica', LogicaController::class);

// Abas HTML
Route::resource('/html', HtmlController::class);

// Abas CSS
Route::resource('/css', CssController::class);

// Rotas de autenticação para usuários
Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');