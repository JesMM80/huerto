<?php

use App\Http\Controllers\AbonoController;
use App\Http\Controllers\CosechaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZonaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RiegosController;
use App\Http\Controllers\SiembraController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HortalizaController;
use App\Http\Controllers\HortalizaSembradaController;
use App\Http\Controllers\UserController;

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
    
    $principal = 1;
    return view('principal',['principal' => $principal]);

})->name('principal');

Route::get('/familias',[FamilyController::class,'index'])->name('familias.index');
Route::get('/familias/create',[FamilyController::class,'create'])->name('familias.create');
Route::post('/familias/store',[FamilyController::class,'store'])->name('familias.store');
Route::get('/familias/{familia}/edit',[FamilyController::class,'edit'])->name('familias.edit');
Route::put('/familias/{familia}',[FamilyController::class,'update'])->name('familias.update');

Route::get('/hortalizas',[HortalizaController::class,'index'])->name('hortalizas.index');
Route::delete('/hortalizas/{id}',[HortalizaController::class,'destroy'])->name('hortalizas.destroy');
Route::get('/hortalizas/{hortaliza}/edit',[HortalizaController::class,'edit'])->name('hortalizas.edit');
Route::put('/hortalizas/{hortaliza}',[HortalizaController::class,'update'])->name('hortalizas.update');
Route::get('/hortalizas/create',[HortalizaController::class,'create'])->middleware('UserIsAdmin')->name('hortalizas.create');
Route::post('/hortalizas',[HortalizaController::class,'store'])->name('hortalizas.store');

Route::get('/siembra',[SiembraController::class,'create'])->name('siembra.create');
Route::post('/siembra',[SiembraController::class,'store'])->name('siembra.store');

Route::get('hortalizas/sembradas',[HortalizaSembradaController::class,'index'])->middleware('UserListaSiembra')->name('sembradas.index');

Route::get('/zonas',[ZonaController::class,'index'])->name('zonas.index');
Route::get('/zonas/create',[ZonaController::class,'create'])->name('zonas.create');
Route::post('/zonas',[ZonaController::class,'store'])->name('zonas.store');
Route::delete('zonas/{id}',[ZonaController::class,'destroy'])->name('zonas.destroy');

Route::get('/riegos',[RiegosController::class,'index'])->name('riegos.index');
Route::get('riegos/create',[RiegosController::class,'create'])->name('riegos.create');
Route::get('riegos/edit/{id}',[RiegosController::class,'edit'])->name('riegos.edit');

Route::get('/users',[UserController::class,'index'])->middleware('auth')->name('user.index');
Route::get('/users/listadolw',[UserController::class,'index2'])->middleware('auth')->name('user.index2');
Route::delete('/users/{id}',[UserController::class,'destroy'])->name('user.destroy');
Route::get('/users/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::put('/users/{usuario}',[UserController::class,'update'])->name('user.update');
Route::get('/users/create',[UserController::class,'create'])->middleware('auth')->name('user.create');
Route::post('/users',[UserController::class,'store'])->name('user.store');
Route::get('/users/listado/admin',[UserController::class,'listadmin'])->name('user.listadmin');

Route::get('/cosecha',[CosechaController::class,'index'])->middleware('auth')->name('cosecha.index');
Route::get('/cosecha/create',[CosechaController::class,'create'])->middleware('auth')->name('cosecha.create');
Route::post('/cosecha',[CosechaController::class,'store'])->middleware('auth')->name('cosecha.store');
Route::get('/cosecha/edit/{id}',[CosechaController::class,'edit'])->middleware('auth')->name('cosecha.edit');
Route::get('/cosecha/editlivewire/{cosecha}',[CosechaController::class,'editLw'])->middleware('auth')->name('cosecha.editlw');
Route::put('/cosechas/{cosechas}',[CosechaController::class,'update'])->middleware('auth')->name('cosecha.update');

Route::get('/abonos',[AbonoController::class,'index'])->middleware('auth')->name('abonos.index');
Route::get('/abonos/create',[AbonoController::class,'create'])->middleware('auth')->name('abonos.create');
Route::post('/abonos',[AbonoController::class,'store'])->middleware('auth')->name('abonos.store');
Route::get('/abonos/edit/{id}',[AbonoController::class,'edit'])->middleware('auth')->name('abonos.edit');
Route::put('/abonos/{abono}',[AbonoController::class,'update'])->middleware('auth')->name('abonos.update');
Route::delete('/abonos/{id}',[AbonoController::class,'destroy'])->middleware('auth')->name('abonos.destroy');
Route::get('/abonos/asociar',[AbonoController::class,'asociar'])->middleware('auth')->name('abonos.asociar');
Route::post('/abonos/asociar',[AbonoController::class,'storeAsociacion'])->middleware('auth')->name('abonos.storeAsociacion');
Route::get('/abonos/listado/asociados',[AbonoController::class,'listaAsociados'])->middleware('auth')->name('abonos.listaAsociados');
Route::delete('/abonos/listado/{id}',[AbonoController::class,'destroyAsociado'])->middleware('auth')->name('abonos.destroyAsociado');