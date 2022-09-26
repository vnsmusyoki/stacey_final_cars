<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [PagesController::class, 'index']);
Route::post('/create-account', [PagesController::class, 'createaccount']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('administrator');
Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user');

Auth::routes();

Route::get('/user/publish-car/{slug}', [UserDashboardController::class, 'publishcar'])->name('user.publishcars');
Route::get('/user/upload-car', [UserDashboardController::class, 'uploadcar'])->name('user.uploadcar');
Route::get('/user/my-cars', [UserDashboardController::class, 'mycars'])->name('user.mycars');
Route::get('/user/car-profile/{slug}', [UserDashboardController::class, 'uploadedcarprofile'])->name('user.verifycarprofile');
Route::get('user/all-under-review', [UserDashboardController::class, 'carsunderreview'])->name('user.underreview');
Route::get('user/all-declined-cars', [UserDashboardController::class, 'declinedcars'])->name('user.declinedcars');
Route::get('user/all-published-cars', [UserDashboardController::class, 'publishedcars'])->name('user.publishedcars');
