<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/alert', function () {
return redirect()->route('home')->with('info', 'You have signed up!');
});
