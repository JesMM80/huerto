<?php

use App\Http\Controllers\FamilyController;
use App\Http\Controllers\HortalizaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
})->name('login');

Route::post('/login',[LoginController::class,'store'])->name('login.inicio');
Route::post('/logout',[LogoutController::class,'store'])->name('logout');

Route::get('/register',[RegisterController::class,'create'])->name('register.create');
Route::post('/register',[RegisterController::class,'store'])->name('register.store');

Route::get('/principal',function(){
    return view('principal');
})->name('principal');

Route::get('/familias',[FamilyController::class,'index'])->name('familias.index');
Route::get('/familias/create',[FamilyController::class,'create'])->name('familias.create');
Route::post('/familias/store',[FamilyController::class,'store'])->name('familias.store');
Route::delete('/familias/{id}',[FamilyController::class,'destroy'])->name('familias.destroy');
Route::get('/familias/{familia}/edit',[FamilyController::class,'edit'])->name('familias.edit');
Route::put('/familias/{familia}',[FamilyController::class,'update'])->name('familias.update');

Route::get('/hortalizas',[HortalizaController::class,'index'])->name('hortalizas.index');
Route::delete('/hortalizas/{id}',[HortalizaController::class,'destroy'])->name('hortalizas.destroy');
Route::get('/hortalizas/{hortaliza}/edit',[HortalizaController::class,'edit'])->name('hortalizas.edit');
Route::put('/hortalizas/{hortaliza}',[HortalizaController::class,'update'])->name('hortalizas.update');
Route::get('/hortalizas/create',[HortalizaController::class,'create'])->name('hortalizas.create');
Route::post('/hortalizas',[HortalizaController::class,'store'])->name('hortalizas.store');