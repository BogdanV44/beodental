<?php

use App\Http\Controllers\front\AjaxController;
use App\Http\Controllers\front\AppointmentController;
use App\Http\Controllers\front\AuthController;
use App\Http\Controllers\front\FrontController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'homeIndex'])->name('home');
Route::get('/about', [FrontController::class, 'aboutIndex'])->name('about');
Route::get('/our-team', [FrontController::class, 'ourTeamIndex'])->name('our-team');
Route::get('/our-team/{id}', [FrontController::class, 'ourTeamShow'])->name('our-team.show');
Route::get('/tourism', [FrontController::class, 'tourismIndex'])->name('tourism');
Route::get('/contact', [FrontController::class, 'contactIndex'])->name('contact');
Route::get('/appointment', [FrontController::class, 'appointmentIndex'])->name('appointment');

Route::group(['prefix' => 'services'], function () {
    Route::get('/', [FrontController::class, 'servicesIndex'])->name('services');
    Route::view('/endodontics', 'front.pages.services.endodontics')->name('endodontics');
    Route::view('/periodontology', 'front.pages.services.periodontology')->name('periodontology');
    Route::view('/implantology', 'front.pages.services.implantology')->name('implantology');
    Route::view('/orthodontics', 'front.pages.services.orthodontics')->name('orthodontics');
    Route::view('/oral-surgery', 'front.pages.services.oral-surgery')->name('oral-surgery');
    Route::view('/pediatric-dentistry', 'front.pages.services.pediatric-dentistry')->name('pediatric-dentistry');
    Route::view('/teeth-whitening', 'front.pages.services.teeth-whitening')->name('teeth-whitening');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'registerIndex'])->name('register');
    Route::post('/register', [AuthController::class, 'registerUser'])->name('registerUser');
    Route::get('/login', [AuthController::class, 'loginIndex'])->name('login');
    Route::post('/login', [AuthController::class, 'loginUser'])->name('loginUser');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('/appointment', [FrontController::class, 'appointmentStore'])->name('appointment.store');
    Route::get('/appointments', [FrontController::class, 'appointmentsIndex'])->name('appointments.index');
    Route::match(['get', 'post'], '/ajax/{section}', [AjaxController::class, 'resolveAjaxRequest'])->name('ajax');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


