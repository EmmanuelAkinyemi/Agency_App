<?php

use App\Http\Controllers\UserController;
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

//contact page for the agency
Route::get('/contact', [PageController::class, 'contact']);

//authentication pages

/*
**The Signup routes
**and all possible
**authentication
**go in here
**/
Route::group(['middleware' => ['guest']], function () {

    Route::get('/signin', [UserController::class, 'signin']);

    Route::get('/signup', [UserController::class, 'create']);

    Route::post('/users', [UserController::class, 'store']);
});


    Route::get('/dashboard', [PageController::class, 'dashboard']);

