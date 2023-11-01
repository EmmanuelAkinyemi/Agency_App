<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use Illuminate\Auth\Events\Logout;
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

Route::get('/home', [PageController::class, 'index']);


//about page for the agency
Route::get('/about', [PageController::class, 'about']);

//services page for the agency
Route::get('/services', [PageController::class, 'services']);

//contact page for the agency
Route::get('/contact', [PageController::class, 'contact']);

//contact page for the agency
Route::get('/privacy', [PageController::class, 'privacy']);

//authentication pages

/*
**The Signup routes
**and all possible
**authentication
**go in here
**/
Route::group(['middleware' => ['guest']], function () {

    Route::post('/logout', [UserController::class, 'logout']);

    Route::get('/login', [UserController::class, 'login'])->name('login');

    Route::post('/users/authenticate', [UserController::class, 'authenticate']);

    Route::get('/signup', [UserController::class, 'create']);

    Route::post('/users', [UserController::class, 'store']);
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [PageController::class, 'dashboard']);
    Route::get('/admin', [PageController::class, 'admin']);
});



