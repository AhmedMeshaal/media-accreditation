<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndividualController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', [RegistrationController::class, 'store']);
Route::get('/profile/{id}', [RegistrationController::class, 'view_profile'])->name('profile');
Route::post('profile_update/{id}', [RegistrationController::class, 'update_profile'])->name('update_profile');
Route::get('profile_image/{id}', [RegistrationController::class, 'display_request_image'])->name('profile_image');

Route::get('/auth', [LoginController::class, 'index'])->name('login');
Route::post('/auth', [LoginController::class, 'login'])->name('auth');
Route::get('/dashboard', function () {
    return view('Individual.dashboard');
})->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/individual_list', [IndividualController::class, 'individual_list'])->name('individual_list');
Route::get('/profile_status/user/{id}', [IndividualController::class, 'individual_approve'])->name('individual_approve');
Route::put('/profile_status/user/{id}', [IndividualController::class, 'individual_approve'])->name('individual_validate');
