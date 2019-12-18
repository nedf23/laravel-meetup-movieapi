<?php

use App\Http\Controllers\ApiTokenController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('generate-key', 'ApiTokenController@update')->middleware('auth');

Route::get('get-key', function () {
    if (Auth::check()) {
        return Auth::user()->api_token;
    } else {
        return 'Log in fool!';
    }
});