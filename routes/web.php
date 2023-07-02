<?php

use Illuminate\Support\Facades\Route;
/**
 * Home
 */
Route::get('/', 'HomeController@index')->name('home');

/**
 * Authentication
 */
Route::get('/signup', 'AuthController@getSignup')->middleware('guest')->name('signup');
Route::post('/signup', 'AuthController@postSignup')->middleware('guest');;
Route::get('/signin', 'AuthController@getSignin')->middleware('guest')->name('signin');
Route::post('/signin', 'AuthController@postSignin')->middleware('guest');
Route::get('/signout', 'AuthController@getSignout')->name('signout');

/**
 * Search
 */
Route::get('/search', 'SearchController@getResults')->name('search.results');