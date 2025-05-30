<?php

use App\Http\Controllers\HomePage;
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

Route::get('/',[HomePage::class,'HomePage'])->name('home');
Route::get('/puzzle', function() {
    return view('Puzzle');
})->name('puzzle');
