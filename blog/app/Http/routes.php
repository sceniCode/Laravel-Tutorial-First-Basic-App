<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Snippet from http://127.0.0.1/laravel-guide/public_html/step-by-steps-basic-app#snippet_7ca804e
// main blog index (use BlogController::index();
Route::get('/', 'BlogController@index');

// view single post. (Use BlogController::post($id))
Route::get('/post/{post}', 'BlogController@post');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
