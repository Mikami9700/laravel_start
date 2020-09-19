<?php

use App\Http\Controllers\Front\UserController;
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

Route::get('/show-number/{id}', function ($id) {
    
    return $id;
})->name('a');

Route::get('show-string/{id?}', function ($id) {
    return $id;
})->name('b');

// NameSpace
Route::namespace('Front')->group(function() {

    // All route only access controller or methods in folder name Front 
    // Route::get('users', 'UserController@showUserName');
    Route::get('users/show', [UserController::class, 'showUserName']);
});
// Group = prefix + middleware
Route::group(['prefix' => 'users', 'middleware' => 'auth'], function() {
    Route::get('/info', function() {
        return 'User INFO';
    });
});

 // MiddlWare
Route::get('middleware', function() {
    return "MiddleWare";
})->middleware('auth');