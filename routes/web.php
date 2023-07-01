<?php

use Illuminate\Support\Facades\Route;
/**
 * Home
 */
Route::get('/', 'HomeController@index')->name('home');

/**
 * Authentication
 */
Route::get('/signup', 'AuthController@getSignup')->name('signup');
Route::post('/signup', 'AuthController@postSignup');
Route::get('/signin', 'AuthController@getSignin')->name('signin');
Route::post('/signin', 'AuthController@postSignup');
