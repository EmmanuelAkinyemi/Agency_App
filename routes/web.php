<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvestmentController;
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

    Route::get('/signup', [UserController::class, 'create']);

    Route::post('/users', [UserController::class, 'store']);

    Route::get('/login', [UserController::class, 'login'])->name('login');

    Route::post('/authenticate', [UserController::class, 'authenticate'])->name('login');

    Route::get('/admin/login', [AdminController::class, 'login'])->name("login");

    Route::post('/admin/login', [AdminController::class, 'authenticate'])->name("login.authenticate");

    Route::get('/admin/register', [AdminController::class, 'register']);

    Route::post('/admin/users', [AdminController::class, 'store']);

    Route::post('/logout', [UserController::class, 'logout']);

    Route::post('/admin/logout', [AdminController::class, 'logout']);

});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [PageController::class, 'dashboard']);

    Route::get('/admin/dashboard', [AdminController::class, 'admin']);

    Route::get('/admin/users', [AdminController::class, 'adminUsers']);

    Route::get('/admin/investments', [AdminController::class, 'adminInvestments']);

    Route::get('/admin/create-invest', [InvestmentController::class, 'create']);


    Route::get('/admin/profile', [AdminController::class, 'adminProfile']);

});
