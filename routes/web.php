<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PdfController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HallManageController;
use App\Http\Controllers\SearchPageController;
use App\Http\Controllers\BookingManageController;
use App\Http\Controllers\PaymentManageController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\PersonalDetailsController;
use App\Http\Controllers\CustomForgotPasswordController;
use App\Http\Controllers\SettingsController;

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


Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::match(['get', 'post'], '/hall-search', [HomeController::class, 'hallSearch'])->name('hallSearch');
Route::post('/book', [HomeController::class, 'store'])->name('book_now');
Route::get('/halldetails/{id}/{price}', [HomeController::class, 'halldetails'])->name('halldetails');
Route::get('/status_update', [HomeController::class, 'status_update'])->name('status_update');
Route::get('/status_update_pending', [HomeController::class, 'status_update_pending'])->name('status_update_pending');
Route::get('/user-login/{hall}/{check_in}/{check_out}/{start_time}/{end_time}/{charity}', [AuthController::class, 'userLoginget'])->name('user.login_search');
Route::post('/user-login-submit', [AuthController::class, 'userLogin'])->name('user.login');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_submit'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_submit'])->name('register.submit');



Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::get('/login/new', [AuthController::class, 'login_new']);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.index');

Route::get('/payment-info', [UserDashboardController::class, 'user_dashboard'])->middleware(['auth', 'verified'])->name('payment_dashboard.index.user');
Route::get('/payment-info/details/{id}', [UserDashboardController::class, 'payment_details'])->middleware(['auth', 'verified'])->name('dashboard.details');
Route::get('/booking-list', [UserDashboardController::class, 'booking_list'])->middleware(['auth', 'verified'])->name('booking.index.user');
Route::get('/booking_details/{id}', [UserDashboardController::class, 'booking_details'])->middleware(['auth', 'verified'])->name('booking_details');

Route::get('/searchresult', [HomeController::class, 'searchresult'])->name('searchresult.index');
Route::get('/payment/{hall_id}/{booking_id}', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/stripe', [PaymentController::class, 'processPayment'])->name('payment.stripe');
Route::get('/process-transaction', [PaymentController::class, 'processTransaction'])->name('processTransaction');
Route::get('/success-transaction', [PaymentController::class, 'successTransaction'])->name('successTransaction');
Route::get('/cancel-transaction', [PaymentController::class, 'cancelTransaction'])->name('cancelTransaction');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile-user', [ProfileController::class, 'edit'])->name('profile.user');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [AuthController::class, 'updateProfile'])->name('profile.update');
    Route::post('/password-change', [AuthController::class, 'updatePassword'])->name('profile.password');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth', 'checkpermission'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/edit/{id}', [DashboardController::class, 'edit'])->name('dashboard.edit');
        Route::post('/update/{id}', [DashboardController::class, 'update'])->name('dashboard.update');
        Route::delete('/destroy/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
        Route::get('/show/{id}', [DashboardController::class, 'show'])->name('dashboard.show');
        Route::get('/pdf', [PdfController::class, 'dashboardPDFGenerate'])->name('dashboard.pdf');
    });
    Route::prefix('searchpage')->group(function () {
        Route::get('/index', [SearchPageController::class, 'index'])->name('searchpage.index');
        Route::get('/create', [SearchPageController::class, 'create'])->name('searchpage.create');
        Route::post('/store', [SearchPageController::class, 'store'])->name('searchpage.store');
        Route::get('/edit/{id}', [SearchPageController::class, 'edit'])->name('searchpage.edit');
        Route::post('/update/{id}', [SearchPageController::class, 'update'])->name('searchpage.update');
        Route::delete('/destroy/{id}', [SearchPageController::class, 'destroy'])->name('searchpage.destroy');
    });

    Route::prefix('hall_manage')->group(function () {
        Route::get('/index', [HallManageController::class, 'index'])->name('hall_manage.index');
        Route::get('/create', [HallManageController::class, 'create'])->name('hallmanage.create');
        Route::post('/store', [HallManageController::class, 'store'])->name('hallmanage.store');
        Route::get('/edit/{id}', [HallManageController::class, 'edit'])->name('hallmanage.edit');
        Route::post('/update/{id}', [HallManageController::class, 'update'])->name('hallmanage.update');
        Route::delete('/destroy/{id}', [HallManageController::class, 'destroy'])->name('hallmanage.destroy');
    });



    Route::prefix('booking')->group(function () {
        Route::get('/index', [BookingManageController::class, 'index'])->name('booking.index');
        Route::get('/create', [BookingManageController::class, 'create'])->name('booking.create');
        Route::post('/store', [BookingManageController::class, 'store'])->name('booking.store');
        Route::get('/edit/{id}', [BookingManageController::class, 'edit'])->name('booking.edit');
        Route::post('/update/{id}', [BookingManageController::class, 'update'])->name('booking.update');
        Route::delete('/destroy/{id}', [BookingManageController::class, 'destroy'])->name('booking.destroy');
    });

    Route::prefix('person-details')->group(function () {
        Route::get('/index', [PersonalDetailsController::class, 'index'])->name('person.index');
        Route::get('/edit/{id}', [PersonalDetailsController::class, 'edit'])->name('person.edit');
        Route::post('/update/{id}', [PersonalDetailsController::class, 'update'])->name('person.update');
        Route::delete('/destroy/{id}', [PersonalDetailsController::class, 'destroy'])->name('person.destroy');
    });

    Route::prefix('payment')->group(function () {
        Route::get('/index', [PaymentManageController::class, 'index'])->name('payment_dashboard.index');
    });

    Route::prefix('settings')->group(function () {
        Route::get('/', [SettingsController::class, 'showSettingsForm'])->name('admin.settings');
        Route::post('/update', [SettingsController::class, 'updateSettings'])->name('admin.settings.update');
        Route::get('/getStripeKey', [SettingsController::class, 'getStripeKey']);
    });





});

