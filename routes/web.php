<?php

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

use \Illuminate\Support\Facades\Auth;
// Start up Routes
Route::get('/', function () {
    return view('pages.landing');
});
// Authentication Routes
Auth::routes();
Route::get('/logout', function () {
   \Auth::logout();
});
// Site Management Routes
Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
    Route::get('/', 'ManageController@index')->name('manage.index');
    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
});
// Users Routes
Route::get('/profile', 'UserController@profile')->name('user.profile');
