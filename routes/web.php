<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/staff/beranda', function () {
    return view('staff.beranda');
})->name('staff.beranda');

Route::get('/staff/peta', function () {
    return view('staff.peta');
})->name('staff.peta');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login'); // atau redirect ke halaman login jika perlu
})->name('logout');