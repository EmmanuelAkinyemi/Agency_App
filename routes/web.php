<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
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

Route::post('contact_mail', [PageController::class, 'contact_mail_send']);

//authentication pages

/*
**The Signup routes
**and all possible
**authentication
**go in here
**/

Route::get('/signup', [UserController::class, 'create']);

Route::post('/users', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('users/authenticate', [UserController::class, 'authenticate']);

Route::put('/users/update-password', [UserController::class, 'updatePassword'])->name('users.update-password');

Route::get('/users/{user}/edit-password', [UserProfileController::class, 'editPassword'])->name('users.edit-password');

Route::put('/users/update-password', [UserProfileController::class, 'updatePassword'])->name('users.update-password');

Route::post('/logout', [UserController::class, 'logout'])->name('auth.logout');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [PageController::class, 'dashboard']);

    Route::get('/withdrawal', [UserController::class, 'withdrawal']);

    Route::post('withdrawal_mail', [UserController::class, 'withdrawal_mail_send']);

    Route::get('/deposit', [UserController::class, 'deposit']);

    Route::post('deposit_mail', [UserController::class, 'deposit_mail_send']);

    Route::get('/admin/dashboard', [AdminController::class, 'admin']);

    Route::get('/admin/users', [AdminController::class, 'adminUsers']);

    Route::get('/admin/investments', [AdminController::class, 'adminInvestments'])->name("investment.create");

    Route::get('/admin/create-invest', [InvestmentController::class, 'create']);

    // Route::post('/admin/create-invest', [InvestmentController::class, 'store_invest'])->name("store_invest");

    Route::post('/admin/store-invest', [InvestmentController::class, 'store_invest'])->name("investment.store");

    Route::get('/admin/{investment}/edit', [InvestmentController::class, 'edit'])->name('investments.edit');

    Route::put('/admin/{investment}', [InvestmentController::class, 'update'])->name('investments.update');

    Route::delete('/investments/{investment}', [InvestmentController::class, 'destroy'])->name('investments.destroy');

    Route::get('/admin/profile', [AdminController::class, 'adminProfile']);
});
