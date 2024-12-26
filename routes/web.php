<?php

use Illuminate\Support\Facades\Route;
//import controllers from controllers 
use App\Http\Controllers\Login;
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

/**Retur view with controller login */
Route::get('/login', [Login::class, 'index'])->name('index');	
