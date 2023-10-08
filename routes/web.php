<?php

use App\Http\Controllers\MeditationController;
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

// Route::name("home")->group(function () {
//     Route::get('/', function () {
//         return view('index');
//     });
//     Route::get('/home', function () {
//         return view("index");
//     });
// });
Route::controller(MeditationController::class)->name("home")->group(function () {
    Route::get('/', 'index');
    Route::get('/home', "index");
});
Route::get('/publish', function () {
    return view("form-publish");
})->name("publish");

Route::get('/profile', function () {
    return view("profile");
})->name("profile");
