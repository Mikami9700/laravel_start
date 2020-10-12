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

/**
 *  Route
 *  Class  . method  string = url   Function return/Controller class + method
 *  Route :: get    ('landing',     function() {
 *      return view('landing');
 *   });
 * 
 **/
Route::get('landing', function() {
    return view('landing');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show-number/{id}', function ($id) {
    
    return $id;
})->name('a');

Route::get('show-string/{id?}', function ($id) {
    return $id;
})->name('b');
/**
 * || NameSpace  || 
 */
Route::namespace('Front')->group(function() {

    // All route only access controller or methods in folder name Front 
    // Route::get('users', 'UserController@showUserName');
    Route::get('users/show', [UserController::class, 'showUserName']);
});

/************************/

/**
 *  Group 
 *      Group the routes and their prefix + middleware + namespace more 
 *  Prefix 
 *      change the url = users/info
 *  Middleware 
 *      Protect make's no one can enter page without sign in as admin
 */
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

Route::get('login', function() {
    return "Error<br>You'er not login!";
})->name('login');

/**
 *  Resource 
 *      Resource route it's [get, post, patch, destory] in one route 
 */
Route::resource('news', 'NewsController');

