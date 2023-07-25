<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers;
use App\Http\Controllers\ReunioesController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('login');
})->name('login.form');

Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'registerJson'])->name('register');



Route::get('/reunioes', [ReunioesController::class, 'index'])->name('reunioes.index');

Route::get('/reunioes-by_id', [ReunioesController::class, 'show'])->name('reunioes.show');
Route::post('/create-reunioes', [ReunioesController::class, 'store'])->name('reunioes.create');
Route::delete('/reunioes', [ReunioesController::class, 'destroy'])->name('reunioes.destroy');
Route::get('/painel', [ReunioesController::class, 'getInfoPanel']);

Route::get('/admin', [ReunioesController::class, 'getDepartments']);

Route::post('/createDepartament', [DepartamentoController::class, 'createDepartament'])->name('departamentos.create');

Route::get('/sala', function () {
    return view('sala');
});
