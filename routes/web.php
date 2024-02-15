<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productoscontroller;
use App\Http\Controllers\tiendas_productoscontroller;

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


//endpoint final para esta ruta: http://localhost/pruebaphpnew/public/createproduct:

Route::post('/createproduct',[Productoscontroller::class, 'guardarproducto'])->name('createprod');;



//endpoint final para esta ruta  : http://localhost/pruebaphpnew/public/tiendaxproducts
Route::post('/tiendaxproducts',[tiendas_productoscontroller::class, 'guardarproductoxtienda'])->name('guardarprod');;