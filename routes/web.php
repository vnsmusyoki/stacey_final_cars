<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PrintReceiptController;
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

Route::get('/return-home-page', function () {
    Auth::logout();
    return redirect()->to('/');
});

Auth::routes();

Route::get('/', [PagesController::class, 'index']);
Route::post('/create-account', [PagesController::class, 'createaccount']);
Route::get('/car/{slug}', [PagesController::class, 'cardetails']);
Route::get('/contact-us', [PagesController::class, 'contactus']);
Route::post('place-car-bid', [PagesController::class, 'placemybid']);
Route::get('all-cars', [PagesController::class, 'allcars']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('administrator');
Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user');
Route::post('admin/dashboard/approve-payment', [AdminDashboardController::class, 'approvepayment']);
Route::get('admin/dashboard/reject-payment/{slug}', [AdminDashboardController::class, 'rejectpayment']);
Auth::routes();

Route::get('/user/publish-car/{slug}', [UserDashboardController::class, 'publishcar'])->name('user.publishcars');
Route::get('/user/upload-car', [UserDashboardController::class, 'uploadcar'])->name('user.uploadcar');
Route::get('/user/my-cars', [UserDashboardController::class, 'mycars'])->name('user.mycars');
Route::post('/user/submit-bid', [UserDashboardController::class, 'submitbids']);
Route::get('/user/edit-bid/{car}/{bid}', [UserDashboardController::class, 'editbid']);
Route::get('/user/remove-bid/{bid}', [UserDashboardController::class, 'removebid']);
Route::patch('user/update-submited-bid/{bid}', [UserDashboardController::class, 'updatebid']);
Route::get('/user/place-bid', [UserDashboardController::class, 'placebid'])->name('user.placebid');
Route::get('/user/all-bids', [UserDashboardController::class, 'allbids'])->name('user.allbids');
Route::get('/user/winning-bids', [UserDashboardController::class, 'winningbids'])->name('user.winningbids');
Route::get('/user/submit-payment/{slug}', [UserDashboardController::class, 'submitpayment']);
Route::post('/user/upload-payment', [UserDashboardController::class, 'uploadpayment']);
Route::get('/user/account-settings', [UserDashboardController::class, 'accountsettings']);
Route::post('/user/update-password', [UserDashboardController::class, 'saveaccountpassword']);
Route::post('/user/update-email', [UserDashboardController::class, 'saveaccountemail']);

Route::get('/user/place-bid/{slug}', [UserDashboardController::class, 'placebiddetails'])->name('user.selectedbidcar');
Route::get('/user/car-profile/{slug}', [UserDashboardController::class, 'uploadedcarprofile'])->name('user.verifycarprofile');
Route::get('user/all-under-review', [UserDashboardController::class, 'carsunderreview'])->name('user.underreview');
Route::get('user/all-declined-cars', [UserDashboardController::class, 'declinedcars'])->name('user.declinedcars');
Route::get('user/all-sold-cars', [UserDashboardController::class, 'soldcars'])->name('user.soldcars');
Route::get('user/all-published-cars', [UserDashboardController::class, 'publishedcars'])->name('user.publishedcars');
Route::get('admin/all-uploaded-cars', [AdminDashboardController::class, 'uploadedcars'])->name('admin.uploadedcars');
Route::get('admin/all-approved-cars', [AdminDashboardController::class, 'approvedcars'])->name('admin.approvedcars');
Route::get('admin/car-profile/{slug}', [AdminDashboardController::class, 'carprofiledetails'])->name('admin.verifycarprofile');
Route::get('admin/car-approve/{slug}', [AdminDashboardController::class, 'carapproved'])->name('admin.publishcars');
Route::get('admin/reject-car/{slug}', [AdminDashboardController::class, 'carrejected'])->name('admin.rejectcars');
Route::patch('admin/judgment-status/{slug}', [AdminDashboardController::class, 'savejudgement'])->name('admin.savejudgement');
Route::get('admin/cars-uploaded-today', [AdminDashboardController::class, 'carsuploadedtoday'])->name('admin.todaycars');
Route::get('admin/all-rejected-cars', [AdminDashboardController::class, 'declinedcars'])->name('admin.declinedcars');
Route::get('admin/all-users', [AdminDashboardController::class, 'allusers'])->name('admin.allusers');
Route::get('admin/all-car-makes', [AdminDashboardController::class, 'carmakes'])->name('admin.carmake');
Route::post('admin/upload-carmake', [AdminDashboardController::class, 'uploadcarmake']);
Route::get('admin/edit-car-make/{slug}', [AdminDashboardController::class, 'editcarmake']);
Route::patch('admin/update-carmake/{slug}', [AdminDashboardController::class, 'updatecarmake']);
Route::get('admin/delete-car-make/{slug}', [AdminDashboardController::class, 'deletecarmake']);
Route::get('admin/all-car-make-models', [AdminDashboardController::class, 'carmakemodels'])->name('admin.carmodels');
Route::post('admin/upload-carmake-model', [AdminDashboardController::class, 'uploadcarmakemodel']);
Route::get('admin/edit-car-make_model/{slug}', [AdminDashboardController::class, 'editcarmakemodel']);
Route::patch('admin/update-carmake-model/{slug}', [AdminDashboardController::class, 'updatecarmakemodel']);
Route::get('admin/delete-car-make-model/{slug}', [AdminDashboardController::class, 'deletecarmakemodel']);
Route::get('/admin/account-settings', [AdminDashboardController::class, 'accountsettings']);
Route::post('/admin/update-password', [AdminDashboardController::class, 'saveaccountpassword']);
Route::post('/admin/update-email', [AdminDashboardController::class, 'saveaccountemail']);
Route::patch('user/extend-time-deadline/{car}', [UserDashboardController::class, 'extendtimedeadline']);
Route::get('/user/car-profile-edit/{slug}', [UserDashboardController::class, 'editcar'])->name('user.editcarprofile');
Route::patch('/user/car-profile-update/{slug}', [UserDashboardController::class, 'updatecar'])->name('user.updatecar');
Route::get('/admin/car-profile/{slug}', [AdminDashboardController::class, 'viewcardetails'])->name('admin.verifycarprofile');


Route::get('/print/{slug}', [PrintReceiptController::class, 'printreceipt'])->name('printreceipt');;
