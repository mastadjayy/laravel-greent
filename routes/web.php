<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Default\DefaultController;
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

Route::get('/', [DefaultController::class, 'index'])->name('home');

Route::get('/a-propos', [DefaultController::class, 'about'])->name('about');

Route::get('/nos-produits', [DefaultController::class, 'product'])->name('products');

Route::get('/gallerie', [DefaultController::class, 'gallerie'])->name('gallerie');

Route::get('/contact', [DefaultController::class, 'contact'])->name('contact');

//Route::get('/', function () {
    //
//});
