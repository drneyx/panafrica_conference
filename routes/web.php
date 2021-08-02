<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
// use App\Http\Controllers\NewsController;
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
Route::get('/', 'Frontend\HomeController@index');
Route::get('online_registration/', 'Frontend\HomeController@online_registtration');
Route::get('sessions/', 'Frontend\HomeController@news');
Route::get('single_session/{id}', 'Frontend\HomeController@single_session');

Route::get('single_speaker/{id}', 'Frontend\HomeController@single_speaker');
Route::get('single_hotel/{id}', 'Frontend\HomeController@single_hotel');
Route::get('contact/', 'Frontend\HomeController@contact');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::resource('a_news', NewsController::class);
Route::resource('a_sessions', SessionController::class);
Route::resource('a_registrations', RegistrationsController::class);
Route::resource('a_speakers', SpeakersController::class);
Route::resource('a_hotels', HotelsController::class);
Route::post('registrations', 'RegistrationsController@store');