<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\BookController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\RegisterUserController;
use App\Http\Controllers\User\TraineeController;
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

Route::get('/', function () {
    return view('front.Home');
});

Route::get('footer', function () {
    return view('front.duplicate.footer');
});
Route::get('navbar', function () {
    return view('front.duplicate.navbar');
});

// ######################################################################

Route::get('home', function () {
    return view('front.Home');
})->name('home');

Route::get('about', function () {
    return view('front.aboutUs');
})->name('about');

Route::get('contact', function () {
    return view('front.contactUs');
})->name('contact');

Route::get('artical', function () {
    return view('front.artical');
})->name('artical');

Route::get('book', function () {
    return view('front.book');
})->name('book')->middleware('CheckLogin');

Route::get('profile', function () {
    return view('front.profile');
})->name('profile');

Route::get('soon', function () {
    return view('front.comingSoon');
})->name('soon');

Route::get('login', function () {
    return view('front.login');
})->name('login');
Route::get('register', function () {
    return view('front.register');
})->name('register');

// ######################################################################

// ADMIN

Route::middleware(['auth', 'verified', 'admin'])->name('admin.')->prefix('admin')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('admin'); Route::resource('/users', UserController::class);
    Route::resource('/admins', AdminController::class);
    Route::get('/logout', [LogoutController::class, 'destroy'])->name('logout');
    Route::resource('/services', ServicesController::class);
    Route::resource('/reservation', ReservationController::class);
    // Route::resource('/todo', [TodolistController::class]);

//     Route::get('/to' , [TodolistController::class , 'index'])->name('index');
//     Route::get('/to' , [TodolistController::class , 'index'])->name('index');
// Route::post('/to' , [TodolistController::class , 'store'])->name('store');
// Route::delete('/to{todolist:id}' , [TodolistController::class , 'destroy'])->name('destroy');

});

// ######################################################################
// TEST

Route::prefix('user')->name('user.')->group(function () {

    Route::get('/', [PublicUserController::class, 'index'])->name('index');

    Route::get('/about', function () {
        return view('publicUser.about');
    })->name('about');

    Route::get('/register', function () {
        return view('publicUser.registerPage');
    })->name('register');

    Route::get('/login', [LoginUserController::class, 'index'])->name('login');
    Route::get('/login/check', [LoginUserController::class, 'LoginPost'])->name('login.check');
    Route::get('/register_user', [RegisterUserController::class, 'index'])->name('register_user');
    Route::get('/register_user/store', [RegisterUserController::class, 'store'])->name('signup.store');
    Route::get('/register_engineer', [RegisterEngineerController::class, 'index'])->name('register_engineer');
    Route::get('/register_engineer/store', [RegisterEngineerController::class, 'store'])->name('register_engineer.store');
    Route::get('/login/destroy', [LoginUserController::class, 'destroy'])->name('login.destroy');
    Route::resource('/contact', ContactController::class);
    Route::resource('/trainee', TraineeController::class);
    Route::resource('/booking', BookController::class);
    Route::resource('/profile', ProfileController::class);


    

});