<?php

use App\Http\Controllers\WebController;
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

Route::get('/',[WebController::class,'Accueil'])->name('Accueil');
Route::get('post',[WebController::class,'post'])->name('post');
Route::post('validation',[WebController::class,'validation'])->name('validation');
Route::post('traitement',[WebController::class,'traitement'])->name('traitement');

