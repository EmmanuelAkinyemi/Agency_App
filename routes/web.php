<?php

use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//index page for the agency app
Route::get('/', [PageController::class, 'index']);

//about page for the agency
Route::get('/about', [PageController::class, 'about']);

//services page for the agency
Route::get('/services', [PageController::class, 'services']);

//
Route::get('/contact', [PageController::class, 'contact']);

